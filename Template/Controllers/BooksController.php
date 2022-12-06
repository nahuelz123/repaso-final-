<?php

namespace Controllers;


use DAO\BooksDAO as BooksDAO;

use Models\Book as Book;

class BooksController
{
    private $booksDAO;


    public function __construct()
    {
        $this->booksDAO = new BooksDAO();

    }

    public function ShowAddView()
    {
        require_once(VIEWS_PATH . "validarSession.php");
        require_once(VIEWS_PATH . "book-add.php");
    }
  

    public function ShowListView()
    {
        require_once(VIEWS_PATH . "validarSession.php");
        $booksList = $this->booksDAO->GetAll();

        require_once(VIEWS_PATH . "book-list.php");
    }
 
 



    public function NewAdd($code, $title, $price)
    {
        $book = new Book();
        $book->setCode($code);
        $book->setTitle($title);
        $book->setPrice($price);
       
        return $book;
    }

   
    public function Add($code, $title, $price)
    {
        $booksList = $this->booksDAO->GetAll();

        $i = 0;
         
        foreach($booksList as $books)
        {
            if($books->getTitle()==$title)
            {  $i=1;
                
                echo "<script> if(confirm('el libro con ese nombre ya existe !'));";
                echo "window.location = '../index.php'; </script>";
              
            }
            if($books->getCode()==$code)
            {
                $i=1;
                echo "<script> if(confirm('el  code ya existe  !'));";
                echo "window.location = '../index.php'; </script>";
               
            }
           
        }

       if($i==0)
       {
           
        $books = $this->NewAdd($code, $title, $price);
       
        $this->booksDAO->Add($books);
        $this->ShowListView(); 
       }
    }


    public function delete($code)
    {

        $booksList = $this->booksDAO->GetAll();

        foreach ($booksList as $books) {
            if ($code == $books->getCode()) {

                $this->booksDAO->delete($code);

                $this->ShowListView();
            }
        }
    }

    


}