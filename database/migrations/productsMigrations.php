<?php

    require_once './database/migrations/core.php';

    $products = new migrations();
    $products->createTable('products');
    
    $products->id_autoIncrement('products_id');
    $products->string('img');
    $products->string('name');
    $products->float('price');
    $products->float('cost');
    $products->integer('tax');
    $products->integer('category_id');
    $products->integer('brand_id');
    $products->integer('stock');
    $products->string('status');
    $products->float('descount');
    $products->integer('descount_active');
    $products->float('points');
    $products->text('description');
    $products->string('date_updated');
    $products->string('date_created');
    
    

    
    $products->execute();