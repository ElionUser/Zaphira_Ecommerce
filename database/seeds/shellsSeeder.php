<?php

    require_once './model/ORM/Tenacy.php';
    require_once './model/ORM/shells.php';
    require_once './core/methods.php';
    require_once './core/time.php';

    class shellsSeeder extends Tenacy {

        public function __construct() {

            $time = new time();


            $_POST = array(
                'user_id' => 1,
                'items' => '[{"product_id":9,"cuantity":27,"subtotal":851985},{"product_id":6,"cuantity":14,"subtotal":168336},{"product_id":1,"cuantity":2,"subtotal":16901.98}]',
                'pdf' => '-', 
                'total' => 1236635.70, // suma de los subtotales mas el impuesto(tax) de cada producto
                'date' => $time->now(),
            );
            shells::create('shells',$_POST);
        }
    }