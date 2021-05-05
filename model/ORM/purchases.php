<?php

    require_once './model/ORM/tenacy.php';

    class purchases extends Tenacy {

        public function user() {

            $this->join('purchases','users','user_id','users_id');

            return $this;
        } 
       
    }