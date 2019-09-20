<?php


namespace App\Http\Controllers;


use App\Models\UsersModel;
use Core\BaseController;
use Slim\Http\Request;
use Slim\Http\Response;

class WelcomeController extends BaseController
{
    public function index(Request $request,Response $response){

        $user=new UsersModel();
        $response->getBody();
        return $response->withJson($user->getUsers());


    }
}