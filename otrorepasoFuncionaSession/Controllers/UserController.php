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
        $userList= $this->userDao->GetAll();
        $i=0;
        foreach($userList as $user)
        {
            if($user->getEmail()==$email)
            {
                $i=1;
                echo "<script> if(confirm('el usuaripo ya existe  !'));";
                echo "window.location = '../index.php'; </script>";
            }
        }
        if($i==0){
            $newUser = new User();
            $newUser->setEmail($email);
            $newUser->setPassword($password);
    
            $this->userDao->Add($newUser);
            $_SESSION["email"]=$email;
            header("location: ../Books/ShowListView");
        }
      
    }



}
?>