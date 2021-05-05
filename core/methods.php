<?php

    // Transforma un array unidimensional en un arreglo del mismo tipo.

    function arrayInArr($_argArray_) {


        $columns = array_keys($_argArray_);

        foreach( $columns as $col )
        {
            $arr[] = $_argArray_[$col];
        }

        return $arr;
    }

    function tCrypt($pw) {
        
        $options = array('cost' => 10);

        return password_hash($pw,PASSWORD_DEFAULT,$options);
        
    }

    function paginate($id,$pages) {

        // ceil redondea un numero hacia arriba 
        //se divide el total de filas por la cantidad a mostrar

        // $btnsPaginate = ceil(count($query)/$limit);
        

        $back = $id - 1;
        $next = $id + 1;
        $backDisable = '';
        $nextDisable = '';

       
       
        echo "<nav aria-label='Page navigation example'>
                <ul class='pagination'>";
                
                if($id == 1) { $backDisable = 'disabled';}
                else { $backDisable = ''; }

                    echo "<li class='page-item $backDisable'>
                        <a class='page-link' href='http://localhost/MVC-ORM-MASTER/dashboard/products/$back'>
                            Anterior
                        </a>
                    </li>";

                    if($id - 2 > 1) {

                        $i = $id - 2;

                        echo "<li class='page-item'>
                            <a class='page-link' href='".helper::base_path()."/dashboard/products/1'>1</a>
                        </li>";
                        echo "<li class='page-item disabled'>
                            <a class='page-link'>...</a>
                        </li>";

                        

                    } else { $i = 1;}
                    
                    
                    for(; $i <= $id + 2  ; $i++ ) {
                        

                            if($i <= $pages) {
                            
                                if($id == $i) {

                                    echo "<li class='page-item active'>
                                            <a class='page-link' 
                                                href='".helper::base_path()."/dashboard/products/$i'>$i
                                            </a>
                                        </li>";
    
                                } else {
    
                                    echo "<li class='page-item'>
                                        <a class='page-link' 
                                            href='".helper::base_path()."/dashboard/products/$i'>$i
                                        </a>
                                    </li>";
                                }
                            }
                              
                            
                    }

                    if($id + 2 < $pages) {

                        $i = $id - 2;
                        echo "<li class='page-item disabled'>
                            <a class='page-link'>...</a>
                        </li>";
                        echo "<li class='page-item'>
                            <a class='page-link' href='".helper::base_path()."/dashboard/products/$pages'>$pages</a>
                        </li>";
                        

                        

                    } else { $i = $pages;}

                    

                    if($id == $pages) { $nextDisable = 'disabled';}
                        else { $nextDisable = ''; }
                   

                    echo "<li class='page-item $nextDisable'>
                        <a class='page-link' href='http://localhost/MVC-ORM-MASTER/dashboard/products/$next'>
                            Siguiente
                        </a>
                    </li>
                </ul>
            </nav>"; 
    }

    /*
    *
    * Limpia una funcion array de valores vacios.
    *
    */

    function cleanArrayEmpty($arg) {

        $var = array();

        for($f = 0 ; $f < count($arg) ; $f++) {
                
            if(!empty($arg[$f])) {

                $var[] = $arg[$f];
            }
        } 

        return $var;
    }

    /*
    *  Esta funcion borra un elemento de un array buscando mediante loop con una condicion
    *  el primer arg es el array , el segundo es el argumento , normalmente por ID se busca
    *  el tercero es la llave por ejemplo el string id
    *  @ deleteElemArr(array ,integer , string)
    *  y devuelve un array nuevo para reasignar al original 
    */ 


    function deleteElemArr($array,$arg,$key) {

        $data = array();

        for($f = 0 ; $f < count($array); $f++ ) {

            if(isset($array[$f])) {

                if($array[$f][$key] != $arg) {
                    
                    $data[] = $array[$f];
                }
            }
        }

        $array = [];

        return $data;
    }

    /*
    *
    * Funciones de calculo
    *
    */

    function quanTax($price,$quan,$tax) {

        $price = $price * $quan;

        $part = ($price / 100) * $tax;

        return $price + $part;
    }

    function descTax($priceTax,$actv,$desc) {

        if($actv != 0 && $desc != 0 ) {

            $desc = ($priceTax / 100) * $desc;

            return $priceTax - $desc;
        }

        return $priceTax;

    }

    /*
    *
    * Funciones de tiempo
    *
    */

    function writeFile($path,$content) {

        $file = fopen($path,'w');
        fwrite($file,$content);
        fclose($file);
    }


    function stars($points) {
        
        $puntos = explode('.',$points);

        $full = floor($points);
        
        for($f = 0; $f < $full ; $f++) {

            echo "<span class='icon-star-full'></span>";
        }
        if(isset($puntos[1])) {
            echo "<span class='icon-star-half'></span>";
            $f++;
        }

        $rest = 5 - $f;
        
        for($f = 0 ; $f < $rest ; $f++) {
            echo "<span class='icon-star'></span>";
        }
    }
