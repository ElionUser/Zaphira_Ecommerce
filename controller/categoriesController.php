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

    require_once './model/ORM/products.php';
    require_once './model/ORM/users.php';
    require_once './model/ORM/coments.php';
    require_once './model/ORM/brands.php';
    require_once './model/ORM/category.php';
    require_once './vendor/autoload.php';

    use Dompdf\Dompdf;

    class categoriesController extends controller {
    
        /* dashboard */
    
        public function index () {

            $categories = categories::all('categories')
                ->orderBy('categories_id','DESC')
                ->get();

            view::dash('dashboard/categories/main',['categories' => $categories]);
        }

        public function store() {

            categories::create('categories');

            helper::back();
        }

        public function borrar($id) {

            categories::delete('categories','categories_id',$id);

            helper::back();
        }

        public function pdf() {

            ob_start();

            $categories = categories::all('categories')->get();

            include './view/pdf/tables/categories.php';

            $dompdf = new Dompdf();
            $dompdf->loadHtml(ob_get_clean());
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();
            $dompdf->stream('file.pdf',array('Attachment' => 0));
        }

    }