
<?php

require_once './model/ORM/Tenacy.php';
require_once './model/ORM/products.php';
require_once './core/methods.php';
require_once './core/time.php';

class productsSeeder extends Tenacy {

    public function __construct() {

        $time = new time();

        $_POST = array(
            'img' => '01.jpg',
            'name' => 'Bluer Pink',
            'price' => 8450.99,
            'cost' => 6299.99,
            'brand_id' => 1,
            'tax' => 12,
            'status' => 'Disponible',
            'stock' => 18,
            'points' => 3.54,
            'descount' => 1.4,
            'descount_active' => 0,
            'description' => 'Zapatillas nike con amortiguacion de pana , cuero negro y rosa , ideal para correr.',
            'category_id' => 1,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '02.jpg',
            'name' => 'Casco Cibelian',
            'price' => 5470.99,
            'cost' => 3250.99,
            'brand_id' => 1,
            'tax' => 12,
            'status' => 'Disponible',
            'stock' => 8,
            'points' => 3.00,
            'descount' => 10,
            'descount_active' => 0,
            'description' => 'Casco para ciclismo deportivo , color blanco. Resistente a todo tipo de golpes.',
            'category_id' => 4,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '03.jpg',
            'name' => 'Reber kingdom',
            'price' => 3499.99,
            'cost' => 1299.99,
            'tax' => 12, 
            'brand_id' => 1,
            'points' => 1.50,
            'status' => 'Disponible',
            'stock' => 10,
            'descount' => 30,
            'descount_active' => 0,
            'description' => 'Zapatilla Nike con suspension delantera. Comoda para correr.',
            'category_id' => 1,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '04.jpg',
            'name' => 'Golden Nike Eleven',
            'price' => 18413.87,
            'cost' => 12499.99,
            'tax' => 21,
            'brand_id' => 1,
            'points' => 4.80,
            'status' => 'Disponible',
            'stock' => 44,
            'descount' => 5,
            'descount_active' => 1,
            'description' => 'Nike dorada version limitada por 300 unidades. Cuero color amarillo.',
            'category_id' => 1,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '05.jpg',
            'name' => 'Extreme sun',
            'price' => 6874.17,
            'cost' => 4299.99,
            'tax' => 21,
            'brand_id' => 1,
            'points' => 1.77,
            'status' => 'En espera',
            'stock' => 18,
            'descount' => 0,
            'descount_active' => 1,
            'description' => 'Version delux de la Golden Nike. Cuero natural. Semi urbana.',
            'category_id' => 1,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '06.jpg',
            'name' => 'Mochila Nike blue elven',
            'price' => 12024.90,
            'cost' => 8299.99,
            'tax' => 21,
            'brand_id' => 1,
            'points' => 3.14,
            'status' => 'En espera',
            'stock' => 0,
            'descount' => 0,
            'descount_active' => 1,
            'description' => 'Mochila deportiva Nike. Con pipa dorada , cinco cierres y catroce almacenamientos.',
            'category_id' => 5,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '07.jpg',
            'name' => 'Shock care',
            'price' => 8703.83,
            'cost' => 6890.99,
            'tax' => 21,
            'brand_id' => 6,
            'points' => 2.69,
            'status' => 'Disponible',
            'stock' => 107,
            'descount' => 30,
            'descount_active' => 0,
            'description' => 'Zapatillas de cuero Nike , color negro tipo bota.',
            'category_id' => 6,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);


        $_POST = array(
            'img' => '08.jpg',
            'name' => 'Extreme dash',
            'price' => 21407.99,
            'cost' => 15299.99,
            'tax' => 21,
            'brand_id' => 1,
            'points' => 5.00,
            'status' => 'Disponible',
            'stock' => 13,
            'descount' => 50,
            'descount_active' => 0,
            'description' => 'Zapatillas con armortiguacion y suspension para una velocidad extrema. Ideal para atletismo.',
            'category_id' => 1,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);
    
        $_POST = array(
            'img' => '09.jpg',
            'name' => 'Pink Overdrive',
            'price' => 12140.99,
            'cost' => 9800.99,
            'tax' => 21,
            'brand_id' => 1,
            'points' => 3.15,
            'status' => 'Disponible',
            'stock' => 31,
            'descount' => 5,
            'descount_active' => 0,
            'description' => 'Zapatillas de mujer deportivas. Soporte cuero ecologico',
            'category_id' => 1,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '10.jpg',
            'name' => 'Jaguar steam Nike',
            'price' => 7850.17,
            'cost' => 5620.99,
            'tax' => 21,
            'brand_id' => 1,
            'points' => 3.15,
            'status' => 'Disponible',
            'stock' => 31,
            'descount' => 5,
            'descount_active' => 0,
            'description' => 'Zapatillas deportivas Jaguar con camaras de air incorporado , color gris y negro. Versiones limitadas hasta agotar stock',
            'category_id' => 1,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '14.jpg',
            'name' => 'Last sound Nike',
            'price' => 3250.99,
            'cost' => 1299.99,
            'tax' => 21,
            'brand_id' => 1,
            'points' => 3.15,
            'status' => 'Disponible',
            'stock' => 31,
            'descount' => 5,
            'descount_active' => 0,
            'description' => 'Gorra Last Sound de Nike. Ultima version de diseño con logo bordado.',
            'category_id' => 8,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '13.jpg',
            'name' => 'white snow',
            'price' => 4579.99,
            'cost' => 3299.99,
            'tax' => 21,
            'brand_id' => 2,
            'points' => 3.15,
            'status' => 'Disponible',
            'stock' => 31,
            'descount' => 5,
            'descount_active' => 0,
            'description' => 'Zapatillas adiddas clasicas , color blanco, comodas urbana',
            'category_id' => 1,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);






        $_POST = array(
            'img' => '15.jpg',
            'name' => 'Running woman',
            'price' => 4320.99,
            'cost' => 2900.99,
            'tax' => 21,
            'brand_id' => 2,
            'points' => 2.50,
            'status' => 'Disponible',
            'stock' => 17,
            'descount' => 3,
            'descount_active' => 1,
            'description' => 'Zapatillas para correr de mujer , color blanco y rosa.',
            'category_id' => 1,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '16.jpg',
            'name' => 'Jungle step',
            'price' => 8000.99,
            'cost' => 7599.99,
            'tax' => 21,
            'brand_id' => 2,
            'points' => 4.50,
            'status' => 'Disponible',
            'stock' => 45,
            'descount' => 5,
            'descount_active' => 1,
            'description' => 'Para las caminatas en la jungla de brasil. Zapatillas color verder adiddas',
            'category_id' => 1,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '17.jpg',
            'name' => 'Viento de Ocaso',
            'price' => 9479.99,
            'cost' => 7823.99,
            'tax' => 30,
            'brand_id' => 2,
            'points' => 5.00,
            'status' => 'Disponible',
            'stock' => 31,
            'descount' => 5,
            'descount_active' => 1,
            'description' => 'Zapatillas adiddas deportivas color ocaso y base grafitada',
            'category_id' => 1,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '18.jpg',
            'name' => 'Slep tigger',
            'price' => 12302.99,
            'cost' => 10507.99,
            'tax' => 21,
            'brand_id' => 2,
            'points' => 3.50,
            'status' => 'Disponible',
            'stock' => 31,
            'descount' => 5,
            'descount_active' => 0,
            'description' => 'El tigre dormido de adiddas',
            'category_id' => 1,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

       
    }
}