<?php

    require_once './database/migrations/core.php';

    $purchase = new migrations();
    $purchase->createTable('purchases');
    
    $purchase->id_autoIncrement('purchases_id');
    
    $purchase->string('provider_name');
    $purchase->integer('user_id'); //responsable
    $purchase->string('status');
    $purchase->float('total');
    $purchase->string('pdf');
    $purchase->string('date');
    $purchase->string('received');
    $purchase->text('items');
    
    

    $purchase->execute();