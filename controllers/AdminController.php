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

        $this->smarty->assign('message', $_SESSION['alert']);
        unset($_SESSION['alert']);
        $this->smarty->assign('userName', $_SESSION['userName']);
        $this->smarty->display('../Bento/views/adminPage.tpl');
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
}