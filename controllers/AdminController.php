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
}