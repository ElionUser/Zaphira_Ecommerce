
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
            'name' => 'Everlast Nine',
            'price' => 8450.99,
            'cost' => 6299.99,
            'brand_id' => 2,
            'tax' => 12,
            'status' => 'Disponible',
            'stock' => 147,
            'talles' => '42,43',
            'points' => 4.50,
            'descount' => 2.4,
            'descount_active' => 0,
            'description' => 'Zapatillas Nike con amortiguacion , diseño unico y llamativo. Comodo al pie y con receptor.',
            'category_id' => 2,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '02.jpg',
            'name' => 'Gintonic Atomic',
            'price' => 14010.99,
            'cost' => 8795,
            'brand_id' => 2,
            'tax' => 12,
            'status' => 'Reserva',
            'stock' => 8,
            'talles' => '37,38,39,40,41,42,43',
            'points' => 3.00,
            'descount' => 10,
            'descount_active' => 0,
            'description' => 'lorem ipsum ever genius',
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
            'brand_id' => 2,
            'talles' => '39,42,43',
            'points' => 1.50,
            'status' => 'En espera',
            'stock' => 10,
            'descount' => 30,
            'descount_active' => 0,
            'description' => 'lorem ipsum ever genius',
            'category_id' => 2,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '04.jpg',
            'name' => 'Dark Nike Eleven',
            'price' => 18413.87,
            'cost' => 12499.99,
            'tax' => 21,
            'brand_id' => 1,
            'talles' => '41,42,44',
            'points' => 4.80,
            'status' => 'Disponible',
            'stock' => 44,
            'descount' => 5,
            'descount_active' => 1,
            'description' => 'lorem ipsum ever genius',
            'category_id' => 6,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '05.jpg',
            'name' => 'Jaguar Nike',
            'price' => 6874.17,
            'cost' => 4299.99,
            'tax' => 21,
            'brand_id' => 3,
            'talles' => '41,42,44',
            'points' => 1.77,
            'status' => 'En espera',
            'stock' => 18,
            'descount' => 0,
            'descount_active' => 1,
            'description' => 'lorem ipsum ever genius',
            'category_id' => 3,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '06.jpg',
            'name' => 'Pink celestial junk',
            'price' => 12024.90,
            'cost' => 8299.99,
            'tax' => 21,
            'brand_id' => 4,
            'talles' => '41,42,44',
            'points' => 3.14,
            'status' => 'En espera',
            'stock' => 0,
            'descount' => 0,
            'descount_active' => 1,
            'description' => 'lorem ipsum ever genius',
            'category_id' => 6,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);

        $_POST = array(
            'img' => '07.jpg',
            'name' => 'Plataforma Melanuim',
            'price' => 14071.83,
            'cost' => 11299.99,
            'tax' => 21,
            'brand_id' => 6,
            'talles' => '41,42,44',
            'points' => 2.69,
            'status' => 'Disponible',
            'stock' => 107,
            'descount' => 30,
            'descount_active' => 0,
            'description' => 'lorem ipsum ever genius',
            'category_id' => 6,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);


        $_POST = array(
            'img' => '08.jpg',
            'name' => 'Gold Forever',
            'price' => 21407.99,
            'cost' => 15299.99,
            'tax' => 21,
            'brand_id' => 2,
            'talles' => '37,42,44',
            'points' => 5.00,
            'status' => 'Disponible',
            'stock' => 13,
            'descount' => 50,
            'descount_active' => 0,
            'description' => 'lorem ipsum ever genius',
            'category_id' => 4,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);
    
        $_POST = array(
            'img' => '04.jpg',
            'name' => 'Titanium remember',
            'price' => 31554.99,
            'cost' => 20299.99,
            'tax' => 21,
            'brand_id' => 4,
            'talles' => '41,42,44',
            'points' => 3.15,
            'status' => 'Disponible',
            'stock' => 31,
            'descount' => 5,
            'descount_active' => 0,
            'description' => 'lorem ipsum ever genius',
            'category_id' => 6,
            'date_created' => $time->now(),
            'date_updated' => $time->now(),
        );
        products::create('products',$_POST);
    
    }
}