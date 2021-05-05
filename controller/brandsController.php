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

    class brandsController extends controller {
    
        /* dashboard */
    
        public function index() {

            $brands = brands::all('brands')
                ->orderBy('brands_id','DESC')
                ->get();

            view::dash('dashboard/brands/main',['brands' => $brands]);
        }

        public function store() {

            brands::create('brands');

            helper::back();
        }

        public function borrar($id) {

            brands::delete('brands','brands_id',$id);

            helper::back();
        }

        public function pdf() {

            ob_start();

            $brands = brands::all('brands')->get();

            include './view/pdf/tables/brands.php';

            $dompdf = new Dompdf();
            $dompdf->loadHtml(ob_get_clean());
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();
            $dompdf->stream('file.pdf',array('Attachment' => 0));
        }

    }