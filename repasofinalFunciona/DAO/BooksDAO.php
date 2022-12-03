<?php

namespace DAO;
use \Exception as Exception;
use DAO\IViews as IViews;
use Models\Company as Company;
use DAO\Connection as Connection;
use Models\Books;

class BooksDAO implements IViews
{
    private $companytList = array();
  
    private $connection;
    private $tableName = "books";


public function Add($book)
{    
    try
    {
        $query = "INSERT INTO ".$this->tableName." (code,title,price ) VALUES (:code,:title,:price);";
    
        $valuesArray["code"] = $book->getCode();
        
        $valuesArray["title"]= $book->getTitle();
        $valuesArray["price"]= $book->getPrice();
     
    $this->connection = Connection::GetInstance();
   $this->connection->ExecuteNonQuery($query, $valuesArray);
    }
    catch(Exception $ex)
    {
        throw $ex;
    }
}
     
  public function GetAll()
{
    try
    {
        $booksList = array();

        $query = "SELECT * FROM ".$this->tableName;

        $this->connection = Connection::GetInstance();

        $resultSet = $this->connection->Execute($query);
        
        foreach ($resultSet as $valuesArray)
        {                
            $book = new Books();
  
            $book->setCODE($valuesArray["code"]);
          
            $book->setTitle($valuesArray['title']);
            $book->setPrice($valuesArray['price']);
            array_push($booksList, $book);
        }

        return $booksList;
    }
    catch(Exception $ex)
    {
        throw $ex;
    }
}

    public function delete($book)
    {
      
        $consulta= "DELETE From code WHERE $this->tableName = '$book'";
      $connection = $this->connection;
        $connection->Execute($consulta);
    }

  
}
