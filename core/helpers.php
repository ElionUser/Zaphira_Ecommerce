<?php

    require_once 'config.php';

    class helper {

        public static function base() {

            return BASE;
        }


        public static function server() {

            if($_SERVER['SERVER_NAME'] == 'localhost') {
                
                return $_SERVER['SERVER_NAME'].'/'.MAIN_FOLDER;

            } else {
               echo self::protocol().self::domain();
            }
        }

        public static function base_path() {
            return self::protocol().$_SERVER['SERVER_NAME'].'/'.MAIN_FOLDER;
        }

        public static function redirect($path = '') {

            header('Location:'.self::protocol().self::server().$path);
        }

        public function back() {

            header('Location:'.$_SERVER['HTTP_REFERER']);
        }

        public function currentPath() {
            return $_SERVER['REQUEST_URI'];
        }


        public function storage() {

            return self::base_path().'/storage/';
        } 

        public static function storageImg() {

            return self::base_path().'/storage/images/'; 
        }

        public static function storagePdfs($bool) {

            if($bool) {
                return self::base_path().'/storage/pdfs/';
            } else { return 'storage/pdfs/';} 
        }

        public static function protocol() {

            return $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
        }

        public static function domain() {

            return $_SERVER['HTTP_HOST'];
        }

        public static function dash() {

            return self::base_path().'/dashboard';
        }

        public static function images() {

            return self::base_path().'/storage/images/';
        }
    }