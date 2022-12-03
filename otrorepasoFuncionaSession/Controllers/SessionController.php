<?php

namespace Controllers;

use DAO\UserDAO as UserDAO;
use Models\User as User;

class SessionController
{


  public function __construct()
  {
    $this->userDAO = new UserDAO();
  }

  public function Login($email, $password)
  {

    $userList = $this->userDAO->GetAll();


    foreach ($userList as $user) {

      if ($user->getEmail() == $email) {
        if($password == $user->getPassword()){
        $_SESSION['email'] = $email;
?>
            <script type="text/javascript">
                alert("ingreso exitoso!");
            </script>
<?php
    header("location: ../Books/ShowListView");
        }else {
          echo "<script> if(confirm('password y/o usuario incorrecto !'));";
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
