<?php

namespace Controllers;
use DAO\UserDao;
class SessionController
{


  public function __construct()
  {
    $this->userDAO = new UserDAO();
  
  }

  public function Login($email, $password)
  {


    $userList = $this->UserDAO->GetAll();
   

    foreach ($userList as $user) {

      if ($user->getEmail() == $email) {
        if ($password == $user->getPASSWORD()) {

          $_SESSION['email'] = $email;
          require_once(VIEWS_PATH . "book-add.php");
        } else {
          echo "<script> if(confirm('password incorrecta !'));";
          echo "window.location = '../index.php'; </script>";
        }
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



    
  


  
  
