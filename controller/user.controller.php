<?php

class UserController extends UserModel
{
    public function getUsers()
    {
        return $this->findAll();
    }

    public function getUsersBy()
    {
        if(!isset($_GET['id'])){
            return;
        }
        $onlyId = preg_replace('/\D', '', $_GET['id']);
        if ($onlyId !== "") {
            return $this->findOne($_GET['id']);
        }
    }
}
?>