<?php

    require_once './model/ORM/Tenacy.php';
    require_once './model/ORM/category.php';
    require_once './core/methods.php';

    class categoriesSeeder extends Tenacy {

        public function __construct() {
         
            
            $_POST = array('name_categories' => 'Zapatillas');

            categories::create('categories',$_POST);

            $_POST = array('name_categories' => 'Zapatos');

            categories::create('categories',$_POST);

            $_POST = array('name_categories' => 'Cazcos');
            
            categories::create('categories',$_POST);

            $_POST = array('name_categories' => 'Bolsos');
            
            categories::create('categories',$_POST);

            $_POST = array('name_categories' => 'Mochilas');
            
            categories::create('categories',$_POST);

            $_POST = array('name_categories' => 'Accesorios');
            
            categories::create('categories',$_POST);

            $_POST = array('name_categories' => 'Remeras');
            
            categories::create('categories',$_POST);

            $_POST = array('name_categories' => 'Camperas');
            
            categories::create('categories',$_POST);

            $_POST = array('name_categories' => 'Gorras');
            
            categories::create('categories',$_POST);

            $_POST = array('name_categories' => 'Shorts');
            
            categories::create('categories',$_POST);

            $_POST = array('name_categories' => 'Guantes');
            
            categories::create('categories',$_POST);

        }
    }