<?php

    class verification extends Tenacy {

        public $errors = []; 

        public function verificate($args,$table) {

            foreach($args as $arg => $k) {
                
                switch($k) {

                    case 'email':
                        if ($this->vEmail($k)) {
                            $this->unique($table,$k);
                        }
                        return $this->errors;
                        break;
                }
            }

        }


        public function vEmail($key) {
            if (!filter_var($_POST[$key],FILTER_VALIDATE_EMAIL)) {
                $this->errors['email'] = 'El formato no coincide con el de un email';
            } else { return true; }
        }

        public function unique($table,$column) {
            if(Tenacy::all($table)->where('email',$_POST[$column])->get()) {
                $this->errors['email'] = 'Ya existe un email como este registrado.';
            }
        }
    }