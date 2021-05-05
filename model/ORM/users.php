<?php

    require_once './model/ORM/tenacy.php';

    class users extends Tenacy {


        public function datas() {

            $this->join('users','datas','data_id','datas_id');

            return $this;

        }
        
    }