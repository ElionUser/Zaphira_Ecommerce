<?php

    require_once './database/migrations/core.php';

    $coments = new migrations();
    $coments->createTable('coments');
    $coments->id_autoIncrement('coments_id');
    $coments->text('coment');
    $coments->integer('user_id');
    $coments->integer('product_id');
    $coments->execute();