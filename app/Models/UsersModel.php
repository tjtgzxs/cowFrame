<?php


namespace App\Models;


use Core\BaseModel;

class UsersModel extends BaseModel
{



    public  function getUsers()
    {

        return $this->select('users',['id','name']);

    }

}