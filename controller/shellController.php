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
    require_once './core/config.php';
    require_once './core/time.php';
    require_once './model/ORM/products.php';
    require_once './model/ORM/users.php';
    require_once './model/ORM/coments.php';
    require_once './model/ORM/brands.php';
    require_once './model/ORM/category.php';
    require_once './model/ORM/shells.php';
    require_once './core/pdfs.php';

    require_once './vendor/autoload.php';

    // require '/vendor/autoload.php';

    use Dompdf\Dompdf;

    class shellController extends controller {
    

        public function errorToPay() {
            var_dump($_GET);
            echo "error al pagar";
        }

        public function successToPay() {
            var_dump($_GET);
            echo $_GET['collection_id']."<br>";
            echo $_GET['collection_status']."<br>";
            echo $_GET['payment_id']."<br>";
            echo $_GET['status']."<br>";
            echo $_GET['external_reference']."<br>";
            echo $_GET['payment_type']."<br>";
            echo $_GET['merchant_order_id']."<br>";
            echo $_GET['preference_id']."<br>";
            echo $_GET['site_id']."<br>";
            echo $_GET['processing_mode']."<br>";
            echo $_GET['merchant_account_id']."<br>";

            echo "pago realizado con exito";
        }

        public function pendingToPay() {
            var_dump($_GET);
            echo "pago pendiente";
        }

        public function passarellaMP() {
        
            
            
            var_dump($preference);
                
            // view::show('testMp');
        }

        /* WEB */

        //Vacia el carrito
        public function emptyCart() {

            session_start();

            $_SESSION['cart'] = [];

            helper::back();
        }
        //Agrega items al carrito de compra y adjunta valores con impuestos y descuentos
        public function addToCart() {

            session_start();

            //Atrapa el id del producto seleccionado
            $id = $_POST['product_id'];

            //pregunta si hay algo en el carrito si existe esa variable , sino asigna un array
            if(!isset($_SESSION['cart'])) { $_SESSION['cart'] = []; }
            
            //consulat a la db por el producto con el di atrapado
            $products = products::all('products')
                    ->where('products_id',$id)
                    ->get();

            if($_POST['cuantity'] <= $products[0]->stock) {

                /*
                *  si el carrito esta vacio o tiene productos que no sean iguales se agrega un producto nuevo
                *  si tiene productos pero el que se va a ingresar esta repetido se suman cantidades y subtotales
                *  y posteriormente se corta el script
                */ 

                if(count($_SESSION['cart']) == 0 || count($_SESSION['cart']) > 0) {

                    for($f = 0; $f < count($_SESSION['cart']); $f++) {
    
                        if($_SESSION['cart'][$f]['id'] == $id) {
    
                            $_SESSION['cart'][$f]['cuantity'] = $_SESSION['cart'][$f]['cuantity'] + $_POST['cuantity'];
                            $_SESSION['cart'][$f]['subtotal'] = $_SESSION['cart'][$f]['cuantity'] * $products[0]->price;   
    
                            helper::back();
                            exit();
                        } 
                    
                    }  
                    
                    $price = quanTax($products[0]->price,1,$products[0]->tax);
    
                    $subtotal = descTax(
                        quanTax($products[0]->price,$_POST['cuantity'],$products[0]->tax),
                        $products[0]->descount_active,
                        $products[0]->descount
                    );
                    
    
                    array_push($_SESSION['cart'],[
                        'id' => $products[0]->products_id,
                        'name' => $products[0]->name,
                        'avatar' => $products[0]->img,
                        'price' => round($price,2),
                        'tax' => $products[0]->tax,
                        'descount' => $products[0]->descount,
                        'descount_active' => $products[0]->descount_active,
                        'cuantity' => $_POST['cuantity'],
                        'subtotal' => round($subtotal,2),
                    ]);  
                }
            }  else {

                echo "agregar una alerta para cuando el stock es menor a lo comprado";
            }

            helper::back();
        }


        // Muestra el carrito de compras en pagina y emite mercado pago si esta activo
        public function cart() {

            if(TEST_MP) {

                $cartShop = json_decode($_POST['cart']);
                
                MercadoPago\SDK::setAccessToken(ACCESS_TOKEN);
                
                $preference = new MercadoPago\Preference();
                
                $preference->back_urls = array(
                    "success" => "localhost/MVC-ORM-master/products/profile/shell/success",
                    "failure" => "localhost/MVC-ORM-master/products/profile/shell/error",
                    "pending" => "localhost/MVC-ORM-master/products/profile/shell/pending"
                );

                $preference->auto_return = "approved";

                $data = array();
                foreach($cartShop as $cart) {
                    
                    $item = new MercadoPago\Item();
                    $item->title = $cart->name;
                    $item->quantity = $cart->cuantity;
                    $item->unit_price = $cart->price;
                    $data[] = $item;
                }
                
                $preference->items = $data;
                $preference->save();

                view::show('cart',['preference' => $preference]);
            
            } else { 
                view::show('cart');
            }  
        }

        // Procesa la venta o compra del cliente
        public function toPay() {
            
            session_start();

            try {

                
                $subtotal = 0; 

                foreach( $_SESSION['cart'] as $cart ) {

                    $tax = ($cart['price'] / 100) * $cart['tax'];

                    $priceReal = $taxO + $cart['price'];

                    $subtotal += $cart['cuantity'] * $priceReal;

                    $arrCart[] = array(
                        'product_id' => $cart['id'],
                        'cuantity' => $cart['cuantity'],
                        'subtotal' => $cart['cuantity'] * $cart['price'],
                    );

                    $productsId[] = $cart['id'];
                }

                /*
                *  Ordena array por el indice de un elemento  
                *  y lo devuelve al array original
                *  en orden
                */

                function sortArAssoc($a,$b) { return $a['product_id'] < $b['product_id']; }
                usort($arrCart,'sortArAssoc');
                
                $products = products::all('products')
                    ->brands()->whereIn('products_id',$productsId)->orderBy('products_id','DESC')
                    ->get();

                $contr = 0;

                foreach($products as $product) {
                    
                    
                    // Si el stock es menor a 0 no se produce la resta de stock
                    if( $product->stock > 0 && 
                        $product->stock > $arrCart[$contr]['cuantity'] ) {

                        $product->stock = $product->stock - $arrCart[$contr]['cuantity'];
                        $product->quantities = $arrCart[$contr]['cuantity'];

                        // Resta de stock
                        $_POST = array('stock' => $product->stock);
                        // Actualizacion a la db del stock
                        products::update('products','products_id',$products[$contr]->products_id);

                    } else {

                        //AGREGAR CARTEL DE ALERTA TIPO SWEET ALERT CON EL MENSAJE:
                        //No se a podido realizar la compra. Hace unos instantes el ultimo disponible
                        //fue comprado por otro usuario. Por favor , sepa disculparnos.
                        //El producto faltante se retirara de su carrito de compras, posteriormente puede seguir 
                        //comprando. 
                        echo "no se puede seguir con la compra!";
                        $_SESSION['cart'] = deleteElemArr($_SESSION['cart'],$arrCart[$contr]['product_id'],'id');
                        exit(); 
                    }
                    $contr++;
                }

                $time = new time();

                

                

                

                $path = 'comprobantes/shells.php';

                $data = file_get_contents('./model/companySett.json');
                $company = json_decode($data);
            
                $pdfs = new pdfs($path,'save',[
                        'products' => $products,
                        'cartItems' => $arrCart,
                        'company' => $company,
                        'time' => $time->now(),
                    ],'shells'
                );  


                $_POST = array(
                    'user_id' => $_SESSION['users_id'],
                    'items' => json_encode($arrCart),
                    'total' =>  round($subtotal,2),
                    'date' => $time->now(),
                    'pdf' => $pdfs->filename,
                );

                shells::create('shells',$_POST);

                $_SESSION['cart'] = [];

                helper::back(); 

                

            } catch( Exception $e ) {

                echo "no hay ningun objeto en el carrito";
            }

              
        }

        // Borra productos del carrito de compras
        public function deleteProductCart() {
            
            session_start();

            $id = $_POST['products_id'];

            $_SESSION['cart'] = deleteElemArr($_SESSION['cart'],$id,'id');
            
            helper::back();

        } 
            
            

        /* dashboard */
    
        public function index() {

            $shells = shells::all('shells')->users()->get();

            foreach($shells as $shell) {
                $shell->items = json_decode($shell->items);
            }
            
            view::dash('dashboard/products/shells',['shells' => $shells]);
            
        }

        public function details($id) {

            $id_products = false;

            $shells = shells::all('shells')->users()->where('shells_id',$id)->get();

            $items = json_decode($shells[0]->items);

            foreach($items as $item) { 
                $id_products .= $item->product_id.','; 
            }

            $id_products = substr($id_products, 0, -1);

            $products = products::all('products')
                ->categories()->brands()
                ->whereInStr('products_id',$id_products)
                ->orderBy('products_id','DESC')
                ->get();

            // /* 
            //     Para evitar problemas los id de la consulta productos y las cantidades
            //     ordenadas en el json deben venir de mayor a menor 
            // */

            $contr = -1;
            foreach($products as $product) {
                $contr++;

                if($product->products_id == $items[$contr]->product_id) {
                    $product->cuantity = $items[$contr]->cuantity;
                    $product->subtotal = $items[$contr]->subtotal; 
                }
            }

            view::dash('dashboard/products/shellsprofile',[
                'shells' => $shells,
                'products' => $products,
                'items' => $items,
            ]);
        }
    }