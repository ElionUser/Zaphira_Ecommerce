

<?php

    require_once './model/ORM/Tenacy.php';
    require_once './model/ORM/brands.php';
    require_once './core/methods.php';

    class brandsSeeder extends Tenacy {

        public function __construct() {

            $_POST = array('name_brands' => 'Nike');

            brands::create('brands',$_POST);

            $_POST = array('name_brands' => 'Addidas');
            
            brands::create('brands',$_POST);

            $_POST = array('name_brands' => 'Puma');
            
            brands::create('brands',$_POST);

            $_POST = array('name_brands' => 'Fila');
            
            brands::create('brands',$_POST);

            $_POST = array('name_brands' => 'StorkMan');
            
            brands::create('brands',$_POST);

            $_POST = array('name_brands' => 'LaddyStork');
            
            brands::create('brands',$_POST);

            $_POST = array('name_brands' => 'Olympicus');
            
            brands::create('brands',$_POST);

            $_POST = array('name_brands' => 'Reebok');
            
            brands::create('brands',$_POST);


        }
    }

  