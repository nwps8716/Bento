<?php

require_once "../Bento/Library/Smarty/Smarty.class.php";

class AdminController extends Controller
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
        } else if ($_SESSION['level'] != 2) {
            $_SESSION['alert'] = "權限錯誤";
            header("Location:/Bento/Member/signIn");
            exit;
        }
    }

    public function adminPage()
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
        $this->smarty->display('../Bento/views/adminPage.tpl');
    }

    public function cancelOrder()                                               //刪除已開單資料
    {
        $this->model("Bentodb");
        $usedb = new Bentodb();

        $orderId = $_POST['orderId'];
        $userId = $_POST['userId'];

        if ($userId == $_SESSION['userId']) {
            $result = $usedb->deleteOrder($orderId, $userId);
            $_SESSION['alert'] = "刪單成功";
            header("Location:/Bento/Admin/adminPage");
            exit;
        } else {
            $_SESSION['alert'] = "使用者ID錯誤";
            header("Location:/Bento/Admin/adminPage");
            exit;
        }
    }

    public function addShopPage()
    {
        $this->checkSession();

        $this->smarty->assign('userName', $_SESSION['userName']);
        $this->smarty->display('../Bento/views/addShopPage.tpl');
    }

    public function uploadShop()
    {
        $this->model("Bentodb");
        $usedb = new Bentodb();

        $userName = $_POST['userName'];
        $shopName = $_POST['shopName'];
        $shopAddress = $_POST['shopAddress'];
        $shopPhone = $_POST['shopPhone'];
        $num = count($_POST['food']);                                           //取餐點總筆數

        $check = $usedb->checkRepeatShop($shopName, $shopAddress, $shopPhone);  //確認有無重複的店家

        if ($check == NULL) {
            $getUserId = $usedb->getUserName($userName);                        //為了抓取userId,$getUser[0]為userId
            $userId = $getUserId[0];

            for ($i = 0 ; $i < $num ; $i++) {                                   //先檢查全部餐點資料是否正確
                if ($_POST['food'][$i] == "" or $_POST['price'][$i] == "") {
                    $this->smarty->assign('message', '餐點資料有錯誤');
                    $this->smarty->display('../Bento/views/addShopPage.tpl');
                    exit;
                }
            }

            $result = $usedb->insertShopData($userId, $shopName, $shopAddress, $shopPhone);

            if ($result > 0) {

                for ($j = 0 ; $j < $num ; $j++) {
                    $result = $usedb->insertShopMenu($shopName, $_POST['food'][$j], $_POST['price'][$j]);
                }

                if ($result > 0) {
                    $_SESSION['alert'] = "新增成功";
                    header("Location:/Bento/Admin/adminPage");
                    exit;
                }
            } else {
                $this->smarty->assign('message', '店家資料新增失敗');
                $this->smarty->display('../Bento/views/addShopPage.tpl');
            }
        } else {
            $this->smarty->assign('message', '新增的店家資料有重複');
            $this->smarty->display('../Bento/views/addShopPage.tpl');
        }
    }

    public function newOrderPage()
    {
        $this->checkSession();

        date_default_timezone_set('Asia/Taipei');
        $nowTime1 = date("Y-m-d");
        $nowTime2 = date("H:i:s");
        $nowTime = $nowTime1 . "T" . $nowTime2;

        $this->model("Bentodb");
        $usedb = new Bentodb();

        $result = $usedb->getShopName();
        $num = count($result);                                                  //取shopName的筆數

        for ($i = 0 ; $i < $num ; $i++) {
            $shopName[$i] = $result[$i][0];
        }
        $this->smarty->assign('message', $_SESSION['alert']);
        unset($_SESSION['alert']);
        $this->smarty->assign('nowTime', $nowTime);
        $this->smarty->assign('shopName', $shopName);                           //將shopName資料回傳到開單頁面
        $this->smarty->assign('userName', $_SESSION['userName']);
        $this->smarty->assign('userId', $_SESSION['userId']);
        $this->smarty->display('../Bento/views/newOrderPage.tpl');
    }

    public function uploadOrder()
    {
        $this->model("Bentodb");
        $usedb = new Bentodb();

        $principal = $_POST['userName'];
        $shopName = $_POST['shopSelect'];
        $endTime = $_POST['endTime'];
        $remark = $_POST['remark'];
        $userId = $_POST['userId'];

        if (strtotime($endTime) > strtotime('now')) {
            $check = $usedb->checkRepeatOrder($shopName, $principal);           //確認訂單有無重複，店名AND負責人查詢

            if ($check == NULL) {
                $shopPhone = $usedb->getShopPhone($shopName);
                $result = $usedb->insertAllOrder($shopName, $shopPhone, $endTime, $principal, $remark, $userId);

                if ($result > 0) {
                    $_SESSION['alert'] = "開單成功";
                    header("Location:/Bento/Admin/adminPage");
                    exit;
                } else {
                    $_SESSION['alert'] = "開單失敗";
                    header("Location:/Bento/Admin/newOrderPage");
                    exit;
                }
            } else {
                $_SESSION['alert'] = "訂單重複";
                header("Location:/Bento/Admin/newOrderPage");
                exit;
            }
        } else {
            $_SESSION['alert'] = "收單時間錯誤";
            header("Location:/Bento/Admin/newOrderPage");
            exit;
        }
    }

    public function adminSingleOrder()                                               //主要功能:個別訂單頁面的所有資料呈現。
    {
        $this->checkSession();
        $this->model("Bentodb");
        $usedb = new Bentodb();

        $orderId = $_GET["orderId"];

        $result = $usedb->getSingleOrder($orderId);

        $getMenu = $usedb->getShopMenu($result['shopName']);
        $num = count($getMenu);

        for ($i = 0 ; $i < $num ; $i++) {
            for ($j = 0 ; $j < 4 ; $j++) {
                $shopMenu[$i][$j] = $getMenu[$i][$j];                           //菜單資料
            }
        }

        $getPurchaser = $usedb->purchaserByOrderId($orderId);
        $allData = count($getPurchaser);

        for ($x = 0 ; $x < $allData ; $x++) {
            for ($y = 0 ; $y < 6 ; $y++) {
                $allPurchaser[$x][$y] = $getPurchaser[$x][$y];                  //訂購資料
            }
            $total = $total + $getPurchaser[$x][4];                             //總金額
        }

        $diffItem = $usedb->differentItem($orderId);
        $diffcount = count($diffItem);

        for ($d = 0 ; $d < $diffcount ; $d++) {                                 //各品項統計
            $singleItem[$d] = $usedb->countByItem($orderId, $diffItem[$d][0]);
            $countByItem[$d][0] = $diffItem[$d][0];                             //各品項名稱
            $countByItem[$d][1] = count($singleItem[$d]);                       //各品項數量
        }

        $this->smarty->assign('message', $_SESSION['alert']);
        unset($_SESSION['alert']);
        $this->smarty->assign('orderId', $orderId);
        $this->smarty->assign('orderData', $result);
        $this->smarty->assign('shopMenu', $shopMenu);
        $this->smarty->assign('allPurchaser', $allPurchaser);
        $this->smarty->assign('totalmoney', $total);
        $this->smarty->assign('countByItem', $countByItem);
        $this->smarty->assign('userName', $_SESSION['userName']);
        $this->smarty->assign('userId', $_SESSION['userId']);
        $this->smarty->display('../Bento/views/adminSingleOrder.tpl');
    }

    public function outToExcel()                                                //撈資料庫資料，轉出Excel檔功能
    {
        $this->model("Bentodb");
        $usedb = new Bentodb();

        $orderId = $_POST['mode'];

        $getPurchaser = $usedb->purchaserByOrderId($orderId);
        $allData = count($getPurchaser);

        for ($x = 0 ; $x < $allData ; $x++) {
            for ($y = 2 ; $y < 5 ; $y++) {
                $data[$x][$y] = $getPurchaser[$x][$y];                          //訂購資料 $data
            }
            $total = $total + $getPurchaser[$x][4];
        }

        $data[$allData][0] = " ";
        $data[$allData][1] = "總金額";
        $data[$allData][2] = $total;

        function cleanData(&$str)
        {
            if($str == 't') $str = 'TRUE';
            if($str == 'f') $str = 'FALSE';
            if(preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
              $str = "'$str";
            }
            if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
            $str = mb_convert_encoding($str, 'BIG-5', 'UTF-8');                 //CSV編碼問題暫時使用BIG-5解決
        }

        // filename for download
        $filename = "website_data_" . date('Ymd') . ".csv";

        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Content-Type: text/csv; charset=BIG-5");                        //BIG-5

        $out = fopen("php://output", 'w');

        $flag = false;
        foreach($data as $row) {
            if(!$flag) {
                // display field/column names as first row
                fputcsv($out, array_keys($row), ',', '"');
                $flag = true;
            }
            array_walk($row, __NAMESPACE__ . '\cleanData');
            fputcsv($out, array_values($row), ',', '"');
        }

        fclose($out);
        exit;
    }
}