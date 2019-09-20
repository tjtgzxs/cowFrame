<?php

use Medoo\Medoo;

$container=new Slim\Container($config);
$app=new Slim\App($container);
//$container['db']=function ($container) {
//    $capsules = new Medoo($container['settings']['db']);
//    return $capsules;
//};
return $app;