<?php

require_once "../Bento/Library/Smarty/Smarty.class.php";

class MemberController extends Controller
{
    public $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty;
    }

    //註冊功能
    public function signUp()
    {
        $this->model("Bentodb");
        $usedb = new Bentodb();

        if (isset($_POST['userName'])) {
            $userName = $_POST['userName'];
            $passWord = $_POST['passWord'];
            $result = $usedb->getUserName($userName);

            if ($result == NULL) {
                $insert = $usedb->insertUserData($userName, $passWord);

                if ($insert > 0) {
                    $this->smarty->assign('message', '註冊成功');
                    $this->smarty->display('../Bento/views/signIn.tpl');
                    exit;
                } else {
                    $this->smarty->assign('message', '註冊失敗');
                    $this->smarty->display('../Bento/views/signIn.tpl');
                    exit;
                }
            } else {
                $this->smarty->assign('message', '使用者帳號重複');
                $this->smarty->display('../Bento/views/signUp.tpl');
                exit;
            }
        }

        $this->smarty->display('../Bento/views/signUp.tpl');
    }

    //登入功能
    public function signIn()
    {
        $this->model("Bentodb");
        $usedb = new Bentodb();

        if (isset($_POST['userName'])) {
            $userName = $_POST['userName'];
            $passWord = $_POST['passWord'];
            $level = $_POST['userLevel'];
            $result = $usedb->checkUserData($userName, $passWord, $level);

            if ($result > 0) {
                $_SESSION['userName'] = $result[1];
                $_SESSION['userId'] = $result[0];
                $_SESSION['alert'] = "登入成功";

                if ($result[3] == 2){
                    header("Location:/Bento/Admin/adminPage");
                    exit;
                } else {
                    header("Location:/Bento/Home/userPage");
                    exit;
                }
            } else {
                $this->smarty->assign('message', '帳號密碼錯誤或權限不符');
                $this->smarty->display('../Bento/views/signIn.tpl');
                exit;
            }
        }
        $this->smarty->assign('message', $_SESSION['alert']);
        unset($_SESSION['alert']);
        $this->smarty->display('../Bento/views/signIn.tpl');
    }

    //登出功能
    public function signOut()
    {
        if (isset($_GET['signOut'])) {
            unset($_SESSION['userName']);
            unset($_SESSION['userId']);
            $this->smarty->assign('message', '完成登出');
            $this->smarty->display('../Bento/views/signIn.tpl');
        }
    }

}
