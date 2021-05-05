<?php

    require_once './model/ORM/tenacy.php';
    require_once './core/methods.php';

    class auth extends Tenacy {

        public static function logIn() {

            session_start();

            $user = users::all('users')->where('email',$_POST['email'])->get();

            echo $_POST['email'];


            $hash = $user[0]->password;

            $pw = $_POST['password'];

            // if(password_verify($pw,$hash)) {

            if($user) {

                foreach($user[0] as $k => $v)
                {
                    $_SESSION[$k] = $v;
                }

                echo "session iniciada";
            } else {
                echo "contraseña incorrecta";
            }
        }

        public static function logOut() {

            session_start();

            session_destroy();
        }
    }