<?php

require_once "../Bento/Library/Smarty/Smarty.class.php";

class HomeController extends Controller
{
    public $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty;
    }

    public function checkSession()                                              //如果不是會員則自動轉址
    {
        if (!isset($_SESSION['userName'])) {
            $_SESSION['alert'] = "請先登入會員";
            header("Location:/Bento/Member/signIn");
            exit;
        } else if ($_SESSION['level'] != 1) {
            $_SESSION['alert'] = "權限錯誤";
            header("Location:/Bento/Member/signIn");
            exit;
        }
    }

    public function userPage()                                                  //所有訂單頁面
    {
        $this->checkSession();
        $this->model("Bentodb");
        $usedb = new Bentodb();

        $result = $usedb->getAllOrder();
        $num = count($result);

        for ($i = 0 ; $i < $num ; $i++) {
            for ($j = 0 ; $j < 7 ; $j++) {
                $order[$i][$j] = $result[$i][$j];
            }
        }
                                                                                //var_dump($order[i][3]); 每筆收單時間
        $this->smarty->assign('message', $_SESSION['alert']);
        unset($_SESSION['alert']);
        $this->smarty->assign('order', $order);
        $this->smarty->assign('userName', $_SESSION['userName']);
        $this->smarty->display('../Bento/views/userPage.tpl');
    }

    public function renewUserPage()                                             //userPage及時更新AJAX
    {
        $this->model("Bentodb");
        $usedb = new Bentodb();

        $result = $usedb->getAllOrder();
        $num = count($result);

        for ($i = 0 ; $i < $num ; $i++) {
            for ($j = 0 ; $j < 7 ; $j++) {
                $order[$i][$j] = $result[$i][$j];
            }
        }

        echo json_encode($order);
    }

    public function singleOrder()                                               //主要功能:個別訂單頁面的所有資料呈現。
    {
        $this->checkSession();
        $this->model("Bentodb");
        $usedb = new Bentodb();

        if (!isset($_GET['orderId'])) {
            header("Location:/Bento/Home/userPage");
            exit;
        } else {
            $orderId = intval($_GET['orderId']);
            $result = $usedb->getSingleOrder($orderId);

            if (is_string($orderId)) {
                header("Location:/Bento/Home/userPage");
                exit;
            } else if ($orderId <= 0) {
                header("Location:/Bento/Home/userPage");
                exit;
            } else if ($result == NULL) {
                header("Location:/Bento/Home/userPage");
                exit;
            }

            $userId = $_SESSION['userId'];

            $getMenu = $usedb->getShopMenu($result['shopName']);
            $num = count($getMenu);

            for ($i = 0 ; $i < $num ; $i++) {
                for ($j = 0 ; $j < 4 ; $j++) {
                    $shopMenu[$i][$j] = $getMenu[$i][$j];                           //菜單資料
                }
            }

            $getPurchaser = $usedb->selfMeals($orderId, $userId);
            $allData = count($getPurchaser);

            $per = 2;
            $pages = ceil($allData/$per);

            if (!isset($_GET['page'])) {
                $page = 1;

                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                }
            } else {
                $page = intval($_GET["page"]);

                if (is_string($page)) {
                    $page = 1;
                } else if ($page <= 0) {
                    $page = 1;
                } else if ($page > $pages) {
                    $page = $pages;
                }
            }
            $start = ($page-1) * $per;

            $orderBy = $usedb->orderByPage($orderId, $userId, $start, $per);

            for ($x = 0 ; $x < $allData ; $x++) {
                for ($y = 0 ; $y < 6 ; $y++) {
                    $allPurchaser[$x][$y] = $orderBy[$x][$y];                  //訂購資料
                }
            }

            $this->smarty->assign('message', $_SESSION['alert']);
            unset($_SESSION['alert']);
            $this->smarty->assign('orderId', $orderId);
            $this->smarty->assign('orderData', $result);
            $this->smarty->assign('shopMenu', $shopMenu);
            $this->smarty->assign('allPurchaser', $allPurchaser);
            $this->smarty->assign('allPage', $pages);
            $this->smarty->assign('dataCount', count($orderBy));
            $this->smarty->assign('userName', $_SESSION['userName']);
            $this->smarty->assign('userId', $_SESSION['userId']);
            $this->smarty->display('../Bento/views/singleOrder.tpl');
        }
    }

    // public function renewOrderStatus()                                          //訂購狀況AJAX資料更新
    // {
    //     $this->model("Bentodb");
    //     $usedb = new Bentodb();

    //     $orderId = $_GET['orderId'];

    //     $getPurchaser = $usedb->purchaserByOrderId($orderId);
    //     $allData = count($getPurchaser);

    //     for ($x = 0 ; $x < $allData ; $x++) {
    //         for ($y = 0 ; $y < 6 ; $y++) {
    //             $allPurchaser[$x][$y] = $getPurchaser[$x][$y];                  //訂購資料
    //         }
    //         $total = $total + $getPurchaser[$x][4];                             //總金額
    //     }

    //     for ($d = 0 ; $d < $allData ; $d++) {
    //         $allPurchaser[$d][6] = $total;
    //     }

    //     echo json_encode($allPurchaser);
    // }

    // public function renewItemCount()                                            //品項統計AJAX資料更新
    // {
    //     $this->model("Bentodb");
    //     $usedb = new Bentodb();

    //     $orderId = $_GET['orderId'];

    //     $diffItem = $usedb->differentItem($orderId);
    //     $diffcount = count($diffItem);

    //     for ($d = 0 ; $d < $diffcount ; $d++) {                                 //各品項統計
    //         $singleItem[$d] = $usedb->countByItem($orderId, $diffItem[$d][0]);
    //         $countByItem[$d][0] = $diffItem[$d][0];                             //各品項名稱
    //         $countByItem[$d][1] = count($singleItem[$d]);                       //各品項數量
    //     }

    //     echo json_encode($countByItem);
    // }

    public function uploadPurchaser()
    {
        $this->model("Bentodb");
        $usedb = new Bentodb();
        $orderId = $_POST['orderId'];

        if ($_POST['shopMenuId'] != "") {
            $userId = $_POST['userId'];
            $purchaser = $_POST['userName'];
            $shopMenuId = $_POST['shopMenuId'];
            $num = count($shopMenuId);

            for ($i = 0 ; $i < $num ; $i++) {
                $result[$i] = $usedb->getShopMenuById($shopMenuId[$i]);
                $item = $result[$i][2];
                $price = $result[$i][3];
                $insert = $usedb->insertPurchaser($orderId, $purchaser, $item, $price, $userId);
            }

            $_SESSION['alert'] = "訂購成功";
            header("Location:/Bento/Home/singleOrder?orderId=$orderId");
            exit;
        } else {
            $_SESSION['alert'] = "請選擇餐點";
            header("Location:/Bento/Home/singleOrder?orderId=$orderId");
            exit;
        }
    }

    public function cancelOrderItem()                                           //取消餐點功能
    {
        $this->model("Bentodb");
        $usedb = new Bentodb();

        $postUserId = $_POST['userId'];
        $orderId = $_POST['orderId'];
        $singleItemID = $_POST['singleItemID'];

        if ($postUserId == $_SESSION['userId']) {
            $result = $usedb->deleteSingleItem($singleItemID);

            if ($result == TRUE) {
                $_SESSION['alert'] = "取消成功";
                header("Location:/Bento/Home/singleOrder?orderId=$orderId");
                exit;
            } else {
                $_SESSION['alert'] = "取消失敗";
                header("Location:/Bento/Home/singleOrder?orderId=$orderId");
                exit;
            }
        } else {
            $_SESSION['alert'] = "使用者ID錯誤";
            header("Location:/Bento/Member/signIn");
            exit;
        }
    }

}
