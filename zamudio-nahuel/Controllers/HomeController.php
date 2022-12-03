<?php

namespace Controllers;

class HomeController
{
    public function Index($message = "")
    {
        require_once(VIEWS_PATH . "index.php");
        
    }
}/*
use DAO\UserDao as UserDao;

class HomeController
    {
        public function __construct()
  {
    $this->userDAO = new UserDao();

  }
        public function Index()
        {
            $userList=$this->userDAO->GetAll();
           
            foreach($userList as $user)
            {
                if($_SESSION["email"]==$user->getEmail())
                {
                    $userList;
                 require_once(VIEWS_PATH."book-add.php");
                }
            }
           

        if(is_null($_SESSION["email"])) {
            require_once(VIEWS_PATH."index.php");
           }
        }        
    }*/