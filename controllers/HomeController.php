<?php

require_once "../Bento/Library/Smarty/Smarty.class.php";

class HomeController extends Controller
{
    //註冊功能
    public function signUp()
    {
        $this->model("Bentodb");
        $usedb = new Bentodb();
        $smarty = new Smarty;

        if(isset($_POST['userName']))
        {
            $userName = $_POST['userName'];
            $passWord = $_POST['passWord'];
            $result = $usedb->getUserName($userName);

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

    //登入功能
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
                $_SESSION['userName'] = $result;
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

    //登出功能
    public function signOut()
    {
        if(isset($_GET['signOut']))
        {
            $smarty = new Smarty;
            unset($_SESSION['userName']);
            $smarty->assign('message', '完成登出');
            $smarty->display('../Bento/views/signIn.tpl');
        }
    }

    public function addShopPage()
    {
        $this->checkSession();
        if(isset($_GET['userName']))
        {
            $smarty = new Smarty;
            $smarty->assign('userName', $_GET['userName']);
            $smarty->display('../Bento/views/addShopPage.tpl');
        }

    }

    public function checkSession()
    {
        if(!isset($_SESSION['userName']))
        {
            header("Location:/Bento/Home/signIn");
            exit;
        }
    }

    public function uploadShop()
    {
        $num = count($_POST['food']);

        for ($i = 0 ; $i < $num ; $i++)
        {
            $result =  $result . ":" . $_POST['food'][$i] . $_POST['price'][$i];
        }

        var_dump($result);
        exit;
    }

}
