<?php

class App
{
    public function __construct()
    {
        session_start();
        $url = $this->parseUrl();

        if (is_null($url)) {
            header("Location:Member/signIn");
            exit;
        }

        $controllerName = "{$url[0]}Controller";

        if (!file_exists("controllers/$controllerName.php")) {

            return;
        }

        require_once "controllers/$controllerName.php";
        $controller = new $controllerName;
        $methodName = isset($url[1]) ? $url[1] : "index";

        if (!method_exists($controller, $methodName)) {
            header("Location:Member/signIn");
            exit;
        }

        unset($url[0]);
        unset($url[1]);
        $params = $url ? array_values($url) : array();
        call_user_func_array(array($controller, $methodName), $params);
    }

    //抓取輸入網址名稱為$url
    public function parseUrl()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/");
            $url = explode("/", $url);

            return $url;
        }
    }
}
