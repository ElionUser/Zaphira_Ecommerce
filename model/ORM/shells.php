<?php

    require_once './model/ORM/tenacy.php';

    class shells extends Tenacy {

        public function users() {

            $this->join('shells','users','user_id','users_id');

            return $this;
        }
    }   