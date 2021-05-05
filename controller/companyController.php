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

    class companyController extends controller {
    
        public function indexCompany() {

            $data = file_get_contents('./model/companySett.json');

            $company = json_decode($data);

            view::dash('dashboard/company/dataCompany',['company' => $company]);
        }

        public function editCompany() {

            $data = file_get_contents('./model/companySett.json');

            $company = json_decode($data);

            view::dash('dashboard/company/editCompany',['company' => $company]);
        }

        public function updateCompanyData() {

            $json = json_encode($_POST);
            
            writeFile('./model/companySett.json',$json);
            
            helper::redirect('/dashboard/company');
       
        }

        public function updateImgCompany() {

            $ext = ['png','jpg','jpeg'];

            $file = new files();
            $fileName = $file->fileClientName()['name'];
            $file->upload($ext,'images/company/');

            $data = file_get_contents('./model/companySett.json');

            $array = json_decode($data);

            $array->img = $fileName;

            $json = json_encode($array);

            writeFile('./model/companySett.json',$json);

            helper::redirect('/dashboard/company');
        }

        public function updateBannerCompany() {

            $ext = ['png','jpg','jpeg'];

            $file = new files();
            $fileName = $file->fileClientName()['name'];
            $file->upload($ext,'images/company/');

            $data = file_get_contents('./model/companySett.json');

            $array = json_decode($data);

            $array->banner = $fileName;

            $json = json_encode($array);

            writeFile('./model/companySett.json',$json);

            helper::redirect('/dashboard/company');
        }

    }
