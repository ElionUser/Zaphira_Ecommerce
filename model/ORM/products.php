<?php

    require_once './model/ORM/tenacy.php';

    class products extends Tenacy {

        public function categories() {

            $this->join('products','categories','category_id','categories_id');

            return $this;
        }

        public function brands() {

            $this->join('products','brands','brand_id','brands_id');

            return $this;
        }
    }