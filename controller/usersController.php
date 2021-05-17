<?php

    require_once './model/ORM/tenacy.php';
    require_once './core/controller.php';
    require_once './core/view.php';
    require_once './model/ORM/users.php';
    require_once './database/migrations/core.php';
    require_once './core/methods.php';
    require_once './model/ORM/verification.php';
    require_once './model/ORM/auth.php';
    require_once './core/files.php';

    require_once './core/helpers.php';
    require_once './model/ORM/datas.php';

    class usersController extends controller {

        /* AUTHENTICATION  */

        public function ingreso() {

            $data = file_get_contents('./model/companySett.json');

            $company = json_decode($data);

            view::show('login',['company' => $company]);
        }

        public function logIn() {

            auth::logIn();

            header('Location: http://localhost/MVC-ORM-MASTER/');
        }

        public function logout() {
            
            auth::logOut();

            helper::back();
        }

        public function uploadImg() {
            
            // $ext = ['png','dd','jpg'];

            // $file = new files();
            // $file->upload($ext,'');


            
        }

        
        public function profile($id)
        {
            $users = users::all('users')->orderBy('id','desc')->get();

            view::show('usersProfile',[
                'users' => $users,
            ]);
        }

        /* DASHBOARD */
        // C-R-U-D 

        public function index() {

            $users = users::all('users')
            ->datas()->orderBy('users_id','DESC')->get();

            $lastUsers = users::all('users')->orderBy('users_id','DESC')->limit(6)->get();

            view::dash('dashboard/users/users',[
                'users' => $users,
                'lastUsers' => $lastUsers,
            ]);
        }

        public function crear() {

            $users = users::all('users')
                ->orderBy('users_id','DESC')
                ->limit(10)
                ->get();

            view::dash('dashboard/users/create',['users' => $users]);
        }

        public function store() {
            
            $datas = datas::all('datas')->orderBy('datas_id','DESC')->limit(1)->get();

            $data_id = $datas[0]->datas_id + 1;

            echo $datas[0]->datas_id;

            $_POST['data_id'] = $data_id; 

            users::create('users');

            $_POST = array(
                'gender' => '',
                'status' => 'Inactivo',
                'permision' => '',
                'birthday' => '',
                'phone' => '',
                'celphone' => '',
                'location' => '',
                'adress' => ''
            );

            datas::create('datas');
    
            
            helper::back();

        }

        public function edit($id) {

            $user = users::all('users')
                ->datas()
                ->where('users_id',$id)
                ->get();


            view::dash('dashboard/edit',['user' => $user]);
        }

        public function updateUser($id) {

            users::update('users','users_id',$id);

            helper::back();
        } 

        public function deleteUser($id) {

            users::delete('users','users_id',$id);

            helper::back();
        }

        public function Editar() {

            $this->view('edit');

        }

        public function Actualizar()
        {

        }


        

        

        public function usersTable() {

            $users = users::all('users')->get();

            view::dash('dashboard/users',['users' => $users]);
        }

        public function profileUserDash($id) {

            $user = users::all('users')->datas()->where('users_id',$id)->get();

            view::dash('dashboard/users/profile',['user' => $user]);
            
        }

        

        


        public function updateDatas($id) {

            datas::update('datas','datas_id',$id);

            helper::back();
        } 

        public function updateUserAvatar() {


            $id = $_POST['users_id']; 

            echo $id ;

            $ext = ['png','jpg','jpeg'];

            $file = new files();
            $fileName = $file->fileClientName()['name'];
            $file->upload($ext,'images/users/');

            $_POST['avatar'] = $fileName; 

            users::update('users','users_id',$id);

            helper::back();

        }


        /* PROVIDERS */
        
        public function listProviders() {

            $users = users::all('users')->datas()->where('permision','Proveedor')->get();

            view::dash('dashboard/users/providers/listProviders',['users' => $users]);
        }

        /* CUSTOMERS */

        public function listCustomers() {

            $users = users::all('users')->datas()->where('permision','Cliente')->get();

            view::dash('dashboard/users/customers/listCustomers',['users' => $users]);
        }


    }