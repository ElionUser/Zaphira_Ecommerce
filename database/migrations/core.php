<?php

    require_once './model/ORM/tools/sqlCommand.php';

    class migrations extends Connection {

        public $sql = [];
        public $table;

        public function createTable($table)
        {

            $this->table = $table;
            array_push($this->sql,"CREATE TABLE $this->table (");
        }

        public function execute() {

            $sql = implode(' ',$this->sql);
            
            $sql = substr($sql,0,-1);
            $sql .= ')';
            
            $stmt = self::StaticConnect()->query($sql);
            
        }

        public function table() {
            array_push($this->sql," CREATE TABLE $this->table ");
        }

        public function id_autoIncrement($id) {
            array_push($this->sql,"$id INT(20) AUTO_INCREMENT PRIMARY KEY ,");
        }

        public function foreing() {
            // array_push($this->sql,"ALTER TABLE $table ADD FOREIGN KEY ($col) REFERENCES $table2 (Id);");
            array_push($this->sql,"FOREIGN KEY (category_id) REFERENCES categories(id)");
        }

        public function text($text,$long = 20) {
            array_push($this->sql,"$text TEXT($long),");
        }

        public function integer($int,$long = 20) {
            array_push($this->sql,"$int INT($long),");
        }

        public function float($int,$long = 20) {
            array_push($this->sql,"$int FLOAT($long),");
        }

        public function string($string,$long = 255) {
            array_push($this->sql,"$string VARCHAR($long) NOT NULL,");
        }

        public function email($email,$long = 100) {
            array_push($this->sql,"$email VARCHAR($long) NOT NULL,");
        }

        public function time($float) {
            
            array_push($this->sql,"$float TIMESTAMP,");
        }

        public function nullable() {
            
            array_push($this->sql,"DEFAULT NULL,");

            // return $this;
        }

        public function boolean($bool) {

            array_push($this->sql, "$bool BOOLEAN");
        }

        public function notnull() {
            
            array_push($this->sql, "NOT NULL");
        }

    }
