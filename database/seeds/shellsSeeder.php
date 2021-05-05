<?php

    require_once './model/ORM/Tenacy.php';
    require_once './model/ORM/shells.php';
    require_once './core/methods.php';

    class shellsSeeder extends Tenacy {

        public function __construct() {

            $_POST = array(
                'user_id' => 1,
                'items' => '[{"product_id":9,"cuantity":27,"subtotal":851985},{"product_id":6,"cuantity":14,"subtotal":168336},{"product_id":1,"cuantity":2,"subtotal":16901.98}]',
                'pdf' => '-', 
                'total' => 1236635.70, // suma de los subtotales mas el impuesto(tax) de cada producto
                'date' => '04/07/2018'
            );
            shells::create('shells',$_POST);
        }
    }