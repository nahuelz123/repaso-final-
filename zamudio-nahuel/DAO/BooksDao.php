<?php
namespace DAO;

use DAO\IViews as IViews;
use Models\Books as Books;
use \Exception as Exception;

class BooksDao implements IViews{

    private $booksList;

    private $connection;
    private $tableName = "books";

public function Add($books)
{
 
    try {
                $query = "INSERT INTO " . $this->tableName . " ( CODE,title,price) VALUES (:CODE,:title,:price);";
                $valuesArray["CODE"] = $books->getCODE();
                $valuesArray["title"] = $books->getTitle();
                $valuesArray["price"] = $books->getPrice();
            
                $this->connection = Connection::GetInstance();

                $this->connection->ExecuteNonQuery($query, $valuesArray);
    } catch (Exception $ex) {
        throw $ex;
    }
}

public function GetAll()
{
    try {
        $booksList = array();

        $query = "SELECT * FROM " . $this->tableName;

        $this->connection = Connection::GetInstance();

        $resultSet = $this->connection->Execute($query);

        foreach ($resultSet as $valuesArray) {
            $books = new Books();
            $books->setCODE($valuesArray["code"]);
            $books->setTitle($valuesArray["title"]);
            $books->setPrice($valuesArray["price"]);
        
            array_push($booksList, $books);
           
        }

        return $booksList;
    } catch (Exception $ex) {
        throw $ex;
    }
}
public function delete($code)
    {
        $this->connection = Connection::GetInstance();
        $aux = "DELETE From books WHERE CODE = '$code'";
        $connection = $this->connection;
        $connection->Execute($aux);
       
    }



}
?>