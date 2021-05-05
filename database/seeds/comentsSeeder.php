<?php

require_once './model/ORM/Tenacy.php';
require_once './model/ORM/coments.php';
require_once './core/methods.php';

class comentsSeeder extends Tenacy {

    public function __construct() {

        $_POST = array(
            'coment' => 'Hola , como estan. Me gustaria saber que tiempos de entrega tienen.',
            'user_id' => 1,
            'product_id' => 3,
            
        );
        coments::create('coments',$_POST);


        $_POST = array(
            'coment' => 'Me gustaria saber si van a reponer los modelos de nike selenion.',
            'user_id' => 3,
            'product_id' => 1,
            
        );
        coments::create('coments',$_POST);
    }
}