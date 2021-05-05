

<?php

    require_once './model/ORM/Tenacy.php';
    require_once './model/ORM/users.php';
    require_once './core/methods.php';

    class usersSeeder extends Tenacy {

        public function __construct() {


            $_POST = array(
                'avatar' => '01.jpg',
                'name' => 'Matias',
                'email' => 'diartematias31@gmail.com',
                'password' => tCrypt('22363033'),
                'data_id' => 1,
            );
            users::create('users',$_POST);
            
            $_POST = array(
                'avatar' => '02.jpg',
                'name' => 'Jesi',
                'email' => 'Jesi@gmail.com',
                'password' => tCrypt('22363033'),
                'data_id' => 2,
            );
            users::create('users',$_POST);

            $_POST = array(
                'avatar' => '03.jpg',
                'name' => 'Jorge',
                'email' => 'Jorge@gmail.com',
                'password' => tCrypt('22363033'),
                'data_id' => 3,
            );
            users::create('users',$_POST);

            $_POST = array(
                'avatar' => '04.jpg',
                'name' => 'Ariel',
                'email' => 'Ariel@gmail.com',
                'password' => tCrypt('22363033'),
                'data_id' => 4,
            );
            users::create('users',$_POST);

            $_POST = array(
                'avatar' => '05.jpg',
                'name' => 'Mariana cervantes',
                'email' => 'Maru_n13@hotmail.com',
                'password' => tCrypt('22363033'),
                'data_id' => 5,
            );
            users::create('users',$_POST);

            $_POST = array(
                'avatar' => '06.jpg',
                'name' => 'Belen Jutz',
                'email' => 'Belu_118@Yahoo.com.ar',
                'password' => tCrypt('22363033'),
                'data_id' => 6,
            );
            users::create('users',$_POST);

            $_POST = array(
                'avatar' => '07.jpg',
                'name' => 'Victor Arruba',
                'email' => 'VickAr@gmail.com',
                'password' => tCrypt('22363033'),
                'data_id' => 7,
            );
            users::create('users',$_POST);
        

            $_POST = array(
                'avatar' => '08.jpg',
                'name' => 'Micaela Segovia',
                'email' => 'MicaS@gmail.com',
                'password' => tCrypt('22363033'),
                'data_id' => 8,
            );
            users::create('users',$_POST);

            $_POST = array(
                'avatar' => '09.jpg',
                'name' => 'Axel Diarte',
                'email' => 'Axess@gmail.com',
                'password' => tCrypt('22363033'),
                'data_id' => 9,
            );
            users::create('users',$_POST);

        }

    }