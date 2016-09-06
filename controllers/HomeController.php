<?php

require_once "../Bento/Library/Smarty/Smarty.class.php";

class HomeController extends Controller
{

    public function signUp()
    {
        $this->model("Bentodb");
        $usedb = new Bentodb();
        $smarty = new Smarty;

        if(isset($_POST['userName']))
        {
            $userName = $_POST['userName'];
            $passWord = $_POST['passWord'];
            $result = $usedb->getUserData($userName);

            if($result == NULL)
            {
                $insert = $usedb->insertUserData($userName, $passWord);

                if($insert > 0)
                {
                    $smarty->assign('message', '註冊成功');
                    $smarty->display('../Bento/views/signIn.tpl');
                    exit;
                } else {
                    $smarty->assign('message', '註冊失敗');
                    $smarty->display('../Bento/views/signIn.tpl');
                    exit;
                }

            } else {
                $smarty->assign('message', '使用者帳號重複');
                $smarty->display('../Bento/views/signUp.tpl');
                exit;
            }
        }
        $smarty->display('../Bento/views/signUp.tpl');
    }

    public function signIn()
    {
        $this->model("Bentodb");
        $usedb = new Bentodb();
        $smarty = new Smarty;

        if(isset($_POST['userName']))
        {
            $userName = $_POST['userName'];
            $passWord = $_POST['passWord'];
            $result = $usedb->checkUserData($userName, $passWord);

            if($result)
            {
                $smarty->assign('userName', $result);
                $smarty->assign('message', '登入成功');

                $smarty->display('../Bento/views/userPage.tpl');
                exit;
            } else {
                $smarty->assign('message', '帳號或密碼錯誤');
                $smarty->display('../Bento/views/signIn.tpl');
                exit;
            }
        }
        $smarty->display('../Bento/views/signIn.tpl');
    }

    public function signOut()
    {
        if(isset($_GET['signOut']))
        {
            $smarty = new Smarty;
            unset($_SESSION['username']);
            $smarty->assign('message', '完成登出');
            $smarty->display('../Bento/views/signIn.tpl');
        }
    }

}
