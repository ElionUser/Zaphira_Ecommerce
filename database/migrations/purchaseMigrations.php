<?php

    require_once './database/migrations/core.php';

    $purchase = new migrations();
    $purchase->createTable('purchases');
    
    $purchase->id_autoIncrement('purchases_id');
    $purchase->integer('provider_id');
    $purchase->integer('user_id'); //responsable
    $purchase->string('status');
    $purchase->float('total');
    $purchase->string('pdf');
    $purchase->string('date');
    

    $purchase->execute();