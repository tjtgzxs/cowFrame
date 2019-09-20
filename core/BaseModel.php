<?php


namespace Core;


use Interop\Container\ContainerInterface;
use Medoo\Medoo;

abstract class BaseModel extends Medoo
{
    protected $db;
    public function __construct()
    {
        $databases= require __DIR__.'/../config/databases.php';
        parent::__construct($databases['db']);
    }


}