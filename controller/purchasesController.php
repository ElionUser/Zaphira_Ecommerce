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
    require_once './core/time.php';
    require_once './core/files.php';

    require_once './model/ORM/products.php';
    require_once './model/ORM/users.php';
    require_once './model/ORM/coments.php';
    require_once './model/ORM/brands.php';
    require_once './model/ORM/category.php';
    require_once './model/ORM/purchases.php';

    require_once './vendor/autoload.php';

    use Dompdf\Dompdf;

    class purchasesController extends controller { 

        public function index() {

            $products = products::all('products')
            ->categories()->brands()
            ->orderBy('products_id','DESC')
            ->get();

            view::dash('dashboard/products/purchases',[
                'products' => $products,
            ]);
        }

        public function listPurchases() {

            $purchases = purchases::all('purchases')->user()->orderBy('purchases_id', 'DESC')->get();   

            view::dash('dashboard/products/indexPurchases', [
                'purchases' => $purchases
            ]);
        }

        

        public function getCuantities() {

            $cuantities = cleanArrayEmpty($_POST['cuantity']);

            if(count($cuantities) == count($_POST['shell']))
            {
                ob_start();

                $products = products::all('products')
                    ->categories()->brands()
                    ->whereIn('products_id',$_POST['shell'])
                    ->get();

                include './view/pdf/shells.php';

                $dompdf = new Dompdf();
                $dompdf->loadHtml(ob_get_clean());
                $dompdf->setPaper('A4', 'landscape');
                $dompdf->render();
                $dompdf->stream('file.pdf',array('Attachment'=>0));

            } else { echo "la cantidad de valores de cantidad es distinta de la seleccion"; }

            
        }





        public function chooseProducts() {

            $products = products::all('products')
                    ->categories()->brands()
                    ->whereIn('products_id',$_POST['choose'])
                    ->get();

            $providers = users::all('users')
                ->datas()->where('permision','Proveedor')
                ->get();

            view::dash('dashboard/products/chooseQuantity',[
                'products' => $products,
                'providers' => $providers,
            ]);
        }

        public function processQuantities() {

            $products = products::all('products')
                ->categories()->brands()
                ->whereIn('products_id',$_POST['id'])
                ->get();

            $f = 0;
            $total = 0; 

            foreach($products as $p) {
                $p->quantities = $_POST['quantities'][$f];
                $total += $p->quantities * $p->cost;
                $f++;
            }

            $time = new time();

            $user_id = $_POST['user_id'];
            $status = $_POST['status'];
            $provider_name = $_POST['provider_name'];


            $data = file_get_contents('./model/companySett.json');
            $company = json_decode($data);

            ob_start();

            // $path = helper::base_path().'/public/images/logos/logo-test-02.jpg';

            $products;
            $company;
            $now = $time->now();
            $_POST['quantities'];
            $provider_name;

            include './view/pdf/comprobantes/purchases.php';

            $dompdf = new Dompdf();
            $dompdf->loadHtml(ob_get_clean());
            $dompdf->setPaper('letter', 'portrait'); //portrait or landscape
            $dompdf->render();
            // $dompdf->stream('file.pdf',array('Attachment'=>0));
            $output = $dompdf->output();

            
            $fileName = 'file_'.$time->fileTime().'.pdf';
            $path = helper::storagePdfs(false).'/purchases/'.$fileName; 

            file_put_contents($path,$output);

            $_POST = array(
                'provider_name' => $provider_name,
                'user_id' => $user_id,
                'total' => $total,
                'status' => $status,
                'pdf' => $fileName,
                'received' => '-',
                'date' => $time->now(), 
                'items' => json_encode($products),
            );

            var_dump($_POST);

            purchases::create('purchases',$_POST);

            helper::redirect('/dashboard/products/purchases/listPurchases');

        }
        
        public function getPurchase() {

            $status = $_POST['status'];
            $id = $_POST['purchases_id'];
            $user_id = $_POST['user_id'];

            $currentPurchase = purchases::all('purchases')->where('purchases_id',$id)->get();
            
            $items = json_decode($currentPurchase[0]->items);

            foreach($items as $item) {

                $itemsId[] = $item->products_id;
            }

            $products = products::all('products')->whereIn('products_id',$itemsId)->get();

            $f = 0;

            foreach($products as $product) {
                $_POST = array('stock' => $product->stock + $items[$f]->quantities);
                products::update('products','products_id',$product->products_id); 
                $f++;
            }

            $time = new time();

            $_POST = array(
                'user_id' => $user_id,
                'status' => $status,
                'received' => $time->now(), 
            );

            purchases::update('purchases','purchases_id',$id);

            helper::back();
        }

    }