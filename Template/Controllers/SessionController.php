<?php

namespace Controllers;

use DAO\UsersDAO as UsersDAO;


class SessionController
{


    public function __construct()
    {
        $this->userDAO = new UsersDAO();
    }

    public function Login($email, $password)
    {

        $i = 0;
        $userList = $this->userDAO->GetAll();


        foreach ($userList as $user) {

            if ($user->getEmail() == $email) {

                if ($password == $user->getPassword()) {
                    $i = 1;
                    $_SESSION['email'] = $email;


                   header("location: ../Books/ShowListView");
                } else {
                    echo "<script> if(confirm('password incorrecta !'));";
                    echo "window.location = '../index.php'; </script>";
                }
            }
        }
        if ($i == 0) {
            require_once(VIEWS_PATH . "index.php");
        }
    }




    public function logout()
    {
        session_start();
        session_destroy();
        header("location: ../index.php");
    }
}
