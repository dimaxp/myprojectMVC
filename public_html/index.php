<?php
session_start();
require __DIR__ . '/../vendor/autoload.php';


$request = new DIMA\WSPACE\Base\Request(); // получаем запрос


$file = __DIR__ . '/../config.json';
$app = new DIMA\WSPACE\Base\Application($file);



$response = $app->handleRequest($request);
$response->send();

