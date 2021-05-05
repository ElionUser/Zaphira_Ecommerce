<?php

    require_once './model/ORM/tenacy.php';

    class Controller extends Tenacy {

        public function view( $_page_ , $arg = NULL ) {

            require_once 'view/pages/' .$_page_. '.php' ;
    
        }

        public function components( $_component_ , $arg_comp = NULL ) {

            require_once 'view/components/' .$_component_. '.php' ;

        }
    }

    
    

