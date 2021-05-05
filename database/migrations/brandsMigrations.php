<?php

    require_once './database/migrations/core.php';

    $brands = new migrations();
    $brands->createTable('brands');
    $brands->id_autoIncrement('brands_id');
    $brands->string('name_brands');
    
    $brands->execute();
    