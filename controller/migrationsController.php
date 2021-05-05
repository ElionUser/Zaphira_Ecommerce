<?php

    require_once './database/migrations/usersMigrations.php';
    require_once './database/migrations/productsMigrations.php';
    require_once './database/migrations/categoriesMigrations.php';
    require_once './database/migrations/comentsMigrations.php'; 
    require_once './database/migrations/brandsMigrations.php';
    require_once './database/migrations/datasMigrations.php';
    require_once './database/migrations/shellsMigrations.php';
    require_once './database/migrations/purchaseMigrations.php';

    class migrationsController extends migrations 
    {
        public function migrate() { }
    }

?>