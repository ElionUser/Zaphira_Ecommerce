<?php

    require_once './model/ORM/Tenacy.php';
    require_once './model/ORM/datas.php';
    require_once './core/methods.php';

    class datasSeeder extends Tenacy {

        public function __construct() {

            $_POST = array(
                'gender' => 'Masculino',
                'status' => 'Activo',
                'permision' => 'Programador',
                'birthday' => '26/04/1988',
                'phone' => '1123609768',
                'celphone' => '1123609768',
                'location' => 'San justo',
                'adress' => 'Varela 3838',
            );
            datas::create('datas',$_POST);


            $_POST = array(
                'gender' => 'Femenino',
                'status' => 'Activo',
                'permision' => 'Administrador',
                'birthday' => '07/04/1987',
                'phone' => '1147481515',
                'celphone' => '11265789',
                'location' => 'San justo',
                'adress' => 'Varela 3838',
            );
            datas::create('datas',$_POST);


            $_POST = array(
                'gender' => 'Masculino',
                'status' => 'Inactivo',
                'permision' => 'Proveedor',
                'birthday' => '14/04/1961',
                'phone' => '1147181414',
                'celphone' => '23124568',
                'location' => 'Moron',
                'adress' => 'Garcias Silva 740',
            );
            datas::create('datas',$_POST);


            $_POST = array(
                'gender' => 'Masculino',
                'status' => 'Activo',
                'permision' => 'Cliente',
                'birthday' => '26/04/1988',
                'phone' => '1523184766',
                'celphone' => '1123609768',
                'location' => 'San justo',
                'adress' => 'Varela 3838',
            );
            datas::create('datas',$_POST);


            $_POST = array(
                'gender' => 'Masculino',
                'status' => 'Activo',
                'permision' => 'Cliente',
                'birthday' => '26/04/1988',
                'phone' => '',
                'celphone' => '1123609768',
                'location' => 'San justo',
                'adress' => 'Varela 3838',
            );
            datas::create('datas',$_POST);

            $_POST = array(
                'gender' => 'Masculino',
                'status' => 'Activo',
                'permision' => 'Proveedor',
                'birthday' => '26/04/1988',
                'phone' => '46291784',
                'celphone' => '1123609768',
                'location' => 'San justo',
                'adress' => 'Varela 3838',
            );
            datas::create('datas',$_POST);

            $_POST = array(
                'gender' => 'Masculino',
                'status' => 'Activo',
                'permision' => 'Cliente',
                'birthday' => '26/04/1988',
                'phone' => '44852617',
                'celphone' => '1123609768',
                'location' => 'San justo',
                'adress' => 'Varela 3838',
            );
            datas::create('datas',$_POST);

            $_POST = array(
                'gender' => 'Masculino',
                'status' => 'Activo',
                'permision' => 'Proveedor',
                'birthday' => '26/04/1988',
                'phone' => '02374817',
                'celphone' => '1123609768',
                'location' => 'San justo',
                'adress' => 'Varela 3838',
            );
            datas::create('datas',$_POST);

            $_POST = array(
                'gender' => 'Masculino',
                'status' => 'Activo',
                'permision' => 'Cliente',
                'birthday' => '26/04/1988',
                'phone' => '02202418',
                'celphone' => '1123609768',
                'location' => 'San justo',
                'adress' => 'Varela 3838',
            );
            datas::create('datas',$_POST);

            $_POST = array(
                'gender' => 'Masculino',
                'status' => 'Activo',
                'permision' => 'Proveedor',
                'birthday' => '26/04/1988',
                'phone' => '02174618',
                'celphone' => '1123609768',
                'location' => 'San justo',
                'adress' => 'Varela 3838',
            );
            datas::create('datas',$_POST);

            $_POST = array(
                'gender' => 'Masculino',
                'status' => 'Activo',
                'permision' => 'Cliente',
                'birthday' => '26/04/1988',
                'phone' => '02204418',
                'celphone' => '1123609768',
                'location' => 'San justo',
                'adress' => 'Varela 3838',
            );
            datas::create('datas',$_POST);
        }
    }