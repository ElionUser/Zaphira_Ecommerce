<?php

    require_once './model/ORM/tenacy.php';

    class coments extends Tenacy {

        public function products() {
           
            $this->join('coments','products','product_id','products_id');

            return $this;
        }

        public function users() {

            $this->join('coments','users','user_id','users_id');

            return $this;
        }
    }