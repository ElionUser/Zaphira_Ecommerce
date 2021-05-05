<?php

    
    require_once './core/helpers.php';

    class Route {
        
        public function __construct( $url , $web )
        {
            // separa la ruta por los slashes y analiza si hay un id

            $id_ = $this->analyze( explode( '/' , $url ) );

            
            if( empty( $id_ ) ) {

                $url = $this->replace( $url );
                $this->callController( $web , $url );
            
            } else {

                $url = $this->replace( $url ) .'id';
                $this->callController( $web , $url , $id_);
            }
            
        }

        // devuelve el id si obtuvo uno.

        public function analyze( $_evaluate_id_ ) {

            for( $f = 0 ; $f < count ( $_evaluate_id_ ) ; $f++ ) {

                if ( is_numeric( $_evaluate_id_[ $f ] ) ) {

                    return $_evaluate_id_[ $f ];
                }
            }
        }

        // borra los numeros de la ruta

        public function replace( $_url_replace )
        {
            return preg_replace( "/[0-9]+/" , '' , $_url_replace );
        }

        // Llama al controlador y a los metodos

        public function callController( $_web_ , $_url_ , $_id_method = NULL) {


            foreach ( $_web_ as $paths ) {
                
                if ( $paths['path'] == $_url_ ) {
                    
                    $controller = $paths['controller'];
                    $method = $paths['method'];

                    include 'controller/'.$controller.'.php';

                    $Controller = new $controller();
                    $Controller->$method( $_id_method );
                    exit();
                } 
            }

            header('Location:'.helper::base_path().'/web/Error');
            
        }
    }

    $route = new Route( $_GET['url'] , include 'web.php');
?>