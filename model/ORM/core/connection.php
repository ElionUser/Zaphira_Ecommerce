<?php

    require_once 'sett.php';

    abstract class DataBaseProvider
    {
        public abstract function Connect();
    } 

    class Connection extends DataBaseProvider
    {
        static private $instance = null;

        public function Connect()
        {
            return new PDO(ENGINE.":host=".HOST.";dbname=".DATABASE,USER,PASS,"charset=utf8");
        }

        public static function StaticConnect()
        {
            if(self::$instance == null)
            {
                self::$instance = new PDO(ENGINE.":host=".HOST.";dbname=".DATABASE,USER,PASS,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            }
            return self::$instance;
        }
    }

?>