<?php

    require_once './core/helpers.php';
    require_once './model/ORM/tenacy.php';
    require_once './core/controller.php';
    require_once './core/view.php';
    require_once './model/ORM/users.php';
    require_once './database/migrations/core.php';
    require_once './core/methods.php';
    require_once './model/ORM/verification.php';
    require_once './model/ORM/auth.php';
    require_once './core/files.php';
    require_once './core/time.php';

    require_once './model/ORM/products.php';
    require_once './model/ORM/users.php';
    require_once './model/ORM/coments.php';
    require_once './model/ORM/brands.php';
    require_once './model/ORM/category.php';

    class productController extends controller {

        public function index() {

            $products = products::all('products')->get();

            view::show('products',[
                'products' => $products 
            ]);
        }

        public function shop() {

            $products = products::all('products')
                ->categories()->brands()
                ->whereCond('stock','>',0)
                ->orderBy('products_id','DESC')
                ->get();

            $categories = categories::all('categories')->get();

            $brands = brands::all('brands')->get();

            view::show('shop',[
                'products' => $products,
                'categories' => $categories,
                'brands' => $brands,
            ]);
        }

        public function details($id) {

            $procProfile = products::all('products',$id)
                    ->categories()->brands()
                    ->where('products_id',$id)
                    ->get();

            $products = products::all('products')
                ->categories()->brands()
                ->limit(6)
                ->get();

            $coments = coments::all('coments')
                ->join('coments','users','user_id','users_id')
                ->where('users_id',$id)
                ->get();

            view::show('productDetails',[
                'proc' => $procProfile,
                'products' => $products,
                'coments' => $coments,
            ]);
        }

        /* Dasboard */


        /* formulario de creacion de productos */

        public function crear() {
            
            $brands = brands::all('brands')->get();

            $categories = categories::all('categories')->get();

            view::dash('dashboard/products/create',[
                'brands' => $brands,
                'categories' => $categories,
            ]);
        }

        /* store procedure de productos */

        public function store() {

            $time = new time();

            $_POST['date_updated'] = $time->now();
            $_POST['date_created'] = $time->now(); 

            products::create('products',$_POST);
            
            helper::redirect('/dashboard/products/1');
        }

        /* update procedure */

        public function edit($id) {

            $product = products::all('products')
                ->brands()->categories()
                ->where('products_id',$id)
                ->get();

            $brands = brands::all('brands')->get();

            $categories = categories::all('categories')->get(); 

            view::dash('dashboard/products/edit',[
                'product' => $product,
                'brands' => $brands,
                'categories' => $categories,
            ]);
        }

        public function actualizar() {

            $time = new time();

            $_POST['date_updated'] = $time->now();

            products::update('products','products_id',$_POST['products_id']);

            helper::back();
        }

        public function updateImage() {

            $id = $_POST['products_id'];

            $ext = ['png','jpg','jpeg'];

            $file = new files();
            $fileName = $file->fileClientName()['name'];
            $file->upload($ext,'images/products/');

            $_POST['img'] = $fileName; 

            products::update('products','products_id',$id);

            helper::back();
        }

        /* delete procedure */

        public function borrar($id) {
            
            products::delete('products','products_id',$id);

            helper::redirect('/dashboard/products/1');
        }

        /* tabla de productos */

        public function dashProducts($id) {

            if(isset($_POST['limit'])) { $_POST['limit'] = 10; }
            $limit = 20; 

            $start = ($id - 1) * $limit;

            $products = products::all('products')->categories()->brands()->orderBy('products_id','DESC')->paginate($start,$limit)->get();
    
            $p = products::counting('products_id','products')->get();

            $total = $p[0]->products_id;

            $pages = ceil($total / $limit); 

            view::dash('dashboard/products',[
                'products' => $products,
                'id' => $id,
                'pages' => $pages,
                'limit' => $limit,
            ]);
        }

        public function dashProductsProfile($id) {

            $product = products::all('products')
                ->join('products','brands','brand_id','brands_id')
                ->join('products','categories','category_id','categories_id')
                ->where('products.products_id',$id)
                ->get();

            $coments = coments::all('coments')
                ->join('coments','products','product_id','products_id')
                ->join('coments','users','user_id','users_id')
                ->where('coments.coments_id',$id)
                ->get();

            view::dash('dashboard/productProfile',[
                'product'=> $product,
                'coments' => $coments,
            ]);
        }


        public function importStock ($id) {

            $product = products::all('products')
                ->categories()->brands()
                ->where('products_id',$id)
                ->get();

            $coments = coments::all('coments')
                ->products()->users()
                ->where('coments.coments_id',$id)
                ->get();

            view::dash('dashboard/products/importStock',[
                'product' => $product,
                'coments' => $coments,
            ]);
        }

        public function updateStock($id) {

            $stock = 0;

            $products = products::all('products')->where('products_id',$id)->get();

            $_POST = array('stock' => $_POST['stock'] + $products[0]->stock); 

            products::update('products','products_id',$id);

            helper::redirect('/dashboard/products/profile/'.$id);

        }


    }