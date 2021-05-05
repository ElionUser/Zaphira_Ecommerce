<?php

    global $compact;

    class view {

        public static $page;

        public static function show($pagArg,$compact = []) {

            self::$page = $pagArg;

            require './view/main.php';
        }

        public static function dash($dasArg,$compact = []) {

            self::$page = $dasArg;

            require_once './view/pages/dashboard/main.php';
        }

        public static function component($comp,$compact = []) { 

            require './view/components/'.$comp.'.php' ;
        }

        public static function page($compact = []) {
            
            require './view/pages/'.self::$page.'.php';
        }

        public static function scriptJs($path = '') {

            echo "<script src='$path'>";
        }

    }

    

    
    

