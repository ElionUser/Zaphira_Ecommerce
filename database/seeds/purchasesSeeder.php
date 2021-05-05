<?php

require_once './model/ORM/Tenacy.php';
require_once './model/ORM/purchases.php';
require_once './core/methods.php';

class purchasesSeeder extends Tenacy {

    public function __construct() { 

        $_POST = array(
            'provider_id' => 1,
            'charse' => 'Diarte Matias',
            'status' => 'Pendiente',
            'total' => 49207.19,
            'pdf' => 'hhdbb.pdf',
            'date' => '12/08/2021',
        );
        purchases::create('purchases',$_POST);

    }

}