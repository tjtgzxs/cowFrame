<?php


use Medoo\Medoo;

require __DIR__.'/../bootstrap/autoload.php';
$config= require __DIR__.'/../config/config.php';

$app = require_once __DIR__.'/../bootstrap/app.php';
require __DIR__."/../routers/web.php";
require __DIR__."/../routers/api.php";

$app->run();

