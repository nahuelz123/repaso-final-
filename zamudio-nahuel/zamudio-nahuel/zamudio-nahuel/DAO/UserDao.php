<?php
namespace DAO;

use DAO\IViews as IViews;
use Models\User as User;
use \Exception as Exception;

class UserDao implements IViews{

    private $userList;

    private $connection;
    private $tableName = "users";

public function Add($user)
{
 

     
    try {
                $query = "INSERT INTO " . $this->tableName . " ( userId,email,PASSWORD) VALUES (:userId,:email,:PASSWORD);";
                $valuesArray["userId"] = $user->getUserId();
                $valuesArray["email"] = $user->getEmail();
                $valuesArray["PASSWORD"] = $user->getPASSWORD();
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
            $user->setUserId($valuesArray["userId"]);
            $user->setEmail($valuesArray["email"]);
            $user->setPASSWORD($valuesArray["PASSWORD"]);
        
            array_push($userList, $user);
         
        }

        return $userList;
    } catch (Exception $ex) {
        throw $ex;
    }
}

}
?>