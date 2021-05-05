<?php 

    require_once './database/seeds/usersSeeder.php';
    require_once './database/seeds/productsSeeder.php';
    require_once './database/seeds/categoriesSeeder.php';
    require_once './database/seeds/comentsSeeder.php';
    require_once './database/seeds/brandsSeeder.php';
    require_once './database/seeds/datasSeeder.php';
    require_once './database/seeds/shellsSeeder.php';
    require_once './database/seeds/purchasesSeeder.php';

    class seederController {

        public function createSeeders() {
            new shellsSeeder();
            new usersSeeder();
            new productsSeeder();
            new categoriesSeeder();
            new comentsSeeder();
            new brandsSeeder();
            new datasSeeder();
            new purchasesSeeder();
        }

    }

?>