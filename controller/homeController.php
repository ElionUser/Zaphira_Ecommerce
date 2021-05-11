<?php

    require_once './model/ORM/tenacy.php';
    require_once './core/controller.php';
    require_once './core/view.php';
    require_once './database/migrations/core.php';
    require_once './core/methods.php';
    require_once './model/ORM/verification.php';
    require_once './model/ORM/auth.php';
    require_once './core/files.php';
    require_once './core/helpers.php';

    require_once './model/ORM/products.php';
    require_once './model/ORM/users.php';

    class homeController extends controller {

        public function errorWeb() {
            
            view::show('error');
        }

        public function index() {

            $products = products::all('products')
                ->categories()->brands()
                ->orderBy('products_id','DESC')
                ->limit(8)
                ->get();

            view::show('home',[
                'products' => $products,
            ]);

        }

        public function dashboardInit() {


            $users = users::all('users')->orderBy('users_id','DESC')->get();
            
            $lastUsers = users::all('users')->orderBy('users_id','DESC')->limit(6)->get();

            $lastProducts = products::all('products')->orderBy('products_id','DESC')->limit(9)->get();

            $products = products::all('products')->get();


            view::dash('dashboard/home',[
                'users' => $users,
                'products' => $products,
                'lastUsers' => $lastUsers,
                'lastProducts' => $lastProducts,
            ]);
        }
    }