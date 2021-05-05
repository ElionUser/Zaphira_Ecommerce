<?php

    require_once './model/ORM/core/connection.php';
    require_once './core/methods.php';

    class toolsSentence extends Connection {

        public static $keys;

        /*
        * Herramientas usadas para comando sql CREATE
        * INSERT INTO TABLE ( KEYS ) VALUES ( VALUES )
        */
        /*--------------------------------------------*/
        /*
        * crea un string con formato :name,:email,:value 
        * para agregar a la sentencia sql 
        */

        public static function valueKeys() {

            $valuesKeys = [];

            foreach(self::$keys as $key) {

                $valuesKeys[] = ':'.$key.',';
            }

            $valuesKeys = implode('',$valuesKeys);

            return substr($valuesKeys,0,-1);
        }

        public static function keysValues($args) {
            
            $keysValues = [];

            foreach($args as $key) {

                $keysValues[] = ':'.$key.',';
            }

            $keysValues = implode('',$keysValues);

            return substr($keysValues,0,-1);
        }

        public static function ValuerKeys() {

            $valuesKeys = [];

            foreach($_POST as $k => $key) {

                if($k == 'password') {

                    $hash = tCrypt($key);
                    
                    $key = $hash;
                }

                $valuesKeys[] = ':'.$key.',';
            }

            $valuesKeys = implode('',$valuesKeys);

            return substr($valuesKeys,0,-1);
        }

        /*
        * crea un string con formato name,email,value 
        * para agregar a la sentencia sql 
        */

        public static function stringKeys() {

            self::$keys = array_keys($_POST);

            return implode(' , ',self::$keys);
        }

        public static function keysStrings($argKeys) {
            
            self::$keys = array_keys($argKeys);

            return implode(',',self::$keys);
        } 

        /*
        * agrega a bindParam los valores que van en la base de datos a travez 
        * de un bucle que recorre el array post
        */

        public static function bindValues($_stmt_) {

            self::$keys = array_keys($_POST);

            foreach(self::$keys as $key) {
                $_stmt_->bindParam(':'.$key,$_POST[$key]);
            }
        }

        public static function dataSet() {

            $partialDataSet = implode(' = ? , ' , array_keys($_POST));
            return $partialDataSet.' = ? ';
        }

    }

?>