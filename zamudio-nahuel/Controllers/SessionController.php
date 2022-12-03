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


    $userList = $this->userDAO->GetALL();

    foreach ($userList as $user) {

      if ($user->getEmail() == $email) {
        if ($password == $user->getPASSWORD()) {
       
          $_SESSION['email'] = $email;

          //require_once(VIEWS_PATH . "book-add.php");
          header("location: ../Books/ShowAddView");
         
        } else {
          echo "<script> if(confirm('password incorrecta !'));";
          echo "window.location = '../index.php'; </script>";
        }
      } else {

       /* echo "<script> if(confirm('email incorrecto !'));";
        echo "window.location = '../index.php'; </script>";*/
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
