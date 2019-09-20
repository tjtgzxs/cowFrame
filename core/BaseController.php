<?php


namespace Core;


use Interop\Container\ContainerInterface;

abstract class BaseController
{
    protected $ci;

    public function __construct(ContainerInterface $ci)
    {
        $this->ci=$ci;
    }
}