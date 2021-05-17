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
    require_once './model/ORM/category.php';

    class homeController extends controller {

        public function errorWeb() {
            
            view::show('error');
        }

        public function index() {

            $data = file_get_contents('./model/companySett.json');

            $company = json_decode($data);

            //Buscamos la cantidad de categorias hay
            $countCategories = categories::countResults('categories')->get();

            //Hacemos un numero aleatorio con esa cantidad usando rand
            $countCat = $countCategories[0]->total;

            //buscamos una categoria al azar
            $category = categories::all('categories')
                ->whereCond('categories_id','=',rand(1,$countCat))  
                ->get();

            $oneProc = products::all('products')
                ->whereCond('products_id','=',1)
                ->get();

            //buscamos todos los productos que tengan esa categoria
            $procPerCategory = products::all('products')
                ->categories()->brands()
                ->whereCond('category_id','=',$category[0]->categories_id)
                ->limit(3)
                ->get();

            $products = products::all('products')
                ->categories()->brands()
                ->orderBy('products_id','DESC')
                ->limit(8)
                ->get();


            $beastProducts = products::all('products')
                ->whereCond('points','>','4')
                ->limit(3)
                ->get();

            view::show('home',[
                'products' => $products,
                'beastProducts' => $beastProducts,
                'procPerCategory' => $procPerCategory,
                'oneProc' => $oneProc,
                'company' => $company
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