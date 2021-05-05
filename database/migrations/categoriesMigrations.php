<?php

    require_once './database/migrations/core.php';

    $category = new migrations();
    $category->createTable('categories');
    $category->id_autoIncrement('categories_id');
    $category->string('name_categories');
    $category->execute();
    

    