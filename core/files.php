<?php

    class files {

        public $name, $size, $type ,$temp;

        public function upload($ext,$fold) {
            
            $this->dataFile();

            if(isset($this->name) && $this->name != '') {

                if($this->type($ext)) {

                    $this->move($fold);

                } else { echo "no esta bien"; }
            }
            
            
        }

        public function type($ext) {

            //corta el nombre buscando la extension .jpg por ejemplo

            $fileExt = explode('.',$this->name);
            
            //busca entre las extensiones definidas en el controlador
            //y compara con la del archivo que se intenta subir

            foreach($ext as $e) {
                
                if($e == $fileExt[1]) {
                    return true;
                }
            }

            return false;
            
        }

        /* Obtiene los datos del archivo */

        public function dataFile() {

            foreach($_FILES as $v => $k) {
                $this->name = $_FILES[$v]['name'];
                $this->size = $_FILES[$v]['size'];
                $this->type = $_FILES[$v]['type'];
                $this->temp = $_FILES[$v]['tmp_name'];
            }
        }

        public function move($path) {

            if (move_uploaded_file($this->temp,'./storage/'.$path.$this->name)) {
                echo "subido correctamente";
            }
        }

        public function fileClientName() {
            
            $this->dataFile();

            return array(
                'name' => $this->name,
                'type' => $this->type,
                'size' => $this->size,
                'temp' => $this->temp,
            );
        }




    }