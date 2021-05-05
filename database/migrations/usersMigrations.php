<?php

    require_once './database/migrations/core.php';

    $users = new migrations();
    $users->createTable('users');
    $users->id_autoIncrement('users_id');
    $users->string('avatar');
    $users->string('name');
    $users->email('email');
    $users->integer('data_id');
    $users->string('password');
    
    $users->execute();
