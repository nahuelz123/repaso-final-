<?php

namespace Controllers;

use DAO\UserDAO as UserDAO;
use Models\User as User;

class SessionController
{

  private $userDAO;
  public function __construct()
  {
    $this->userDAO = new UserDAO();
  
  }

  public function Login($email, $password)
  {
      $userList = $this->userDAO->GetAll();

      foreach($userList as $user)
      {
          if($user->getEmail()==$email)
          {
            if($user->getPassword()==$password)
            {
              $_SESSION["email"]=$email;
              header("location: ../Books/ShowAddView");
            }else
            {
              echo "<script> if(confirm('password incorrecta !'));";
              echo "window.location = '../index.php'; </script>";
            }

          }else{
            require_once(VIEWS_PATH . "index.php");
          }
      }
  
  }

  public function logout()
  {
    session_start();
    session_destroy();
   header("location: ../index.php");
  }
  


  




}
