<?php

namespace DAO;

use \Exception as Exception;
use DAO\IViews as IViews;

use DAO\Connection as Connection;
use Models\User as User;

class UserDAO implements IViews
{
    private $userList = array();

    private $connection;
    private $tableName = "users";


    public function Add($user)
    {
        try {
            $query = "INSERT INTO " . $this->tableName . " (email,password ) VALUES (:email,:password);";


            $valuesArray["email"] = $user->getEmail();
            $valuesArray["password"] = $user->getPassword();

            $this->connection = Connection::GetInstance();
            $this->connection->ExecuteNonQuery($query, $valuesArray);
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public function GetAll()
    {
        try {
            $userList = array();

            $query = "SELECT * FROM " . $this->tableName;

            $this->connection = Connection::GetInstance();

            $resultSet = $this->connection->Execute($query);

            foreach ($resultSet as $valuesArray) {
                $user = new User();



                $user->setEmail($valuesArray["email"]);

                $user->setPassword($valuesArray['password']);

                array_push($userList, $user);
            }

            return $userList;
        } catch (Exception $ex) {
            throw $ex;
        }
    }




    public function delete($CompanyName)
    {

      

        $consulta = "DELETE From company WHERE CompanyName = '$CompanyName'";
        $connection = $this->connection;
        $connection->Execute($consulta);
    }


}
