<?php

require_once './database/migrations/core.php';

$datas = new migrations();
$datas->createTable('datas');

$datas->id_autoIncrement('datas_id');
$datas->string('gender');
$datas->string('status');
$datas->string('permision');
$datas->string('birthday');
$datas->string('phone');
$datas->string('celphone');
$datas->string('location');
$datas->string('adress');

$datas->execute();