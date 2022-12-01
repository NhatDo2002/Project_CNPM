<?php 
    class App{
        protected $controller="Home";
        protected $action = "Show";
        protected $params=[];

        function __construct(){
            $url =  explode("/", trim($this->UrlProcess()));

            //Xử lí Controller
            if(file_exists("./mvc/controllers/".$url[0].".php")){
                $this->controller = $url[0];
                unset($url[0]);
            }
            require_once("./mvc/controllers/".$this->controller.".php");
            

            //Xử lí Action
            if(isset($url[1])){
                if(method_exists("controller".$this->controller, $url[1])){
                    $this->action = $url[1];
                }
                unset($url[1]);
            }
            //Xử lí param
            $Class = "controller".$this->controller;
            $Control = new $Class;
            $this->params = $url?array_values($url):[];

            call_user_func_array([$Control, $this->action], $this->params);
            
            
            //call_user_func_array([$this->controller, $this->action], $this->params);
        }

        function UrlProcess(){
            if(isset($_GET["url"])){
                return $_GET["url"];
            }else{
                return '';
            }
        }
    }
?>