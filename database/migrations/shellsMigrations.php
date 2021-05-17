<?php

    require_once './database/migrations/core.php';

    $users = new migrations();
    $users->createTable('shells');

    $users->id_autoIncrement('shells_id');
    $users->integer('user_id');
    $users->text('items');
    $users->float('total');
    $users->string('date');
    $users->string('pdf');
    
    $users->execute();
