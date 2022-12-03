<?php
namespace Controllers;

use DAO\UserDAO;
use Models\User as User;
class UserController
{
    private $userDao;

    public function __construct()
    {
       $this->userDao = new UserDAO();
      
    }
    public function ShowAddView()
    {
        require_once(VIEWS_PATH . "addUser.php");
    }

    public function Add($email, $password)
    {

        $newUser = new User();
        $newUser->setEmail($email);
        $newUser->setPassword($password);

        $this->userDao->Add($newUser);
    }



}
?>