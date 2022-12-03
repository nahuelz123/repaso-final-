<?php

namespace Controllers;

use DAO\BooksDAO;
use Models\Book as book;

class HomeController
{
    private $booksDAO;


        public function __construct()
        {
            $this->booksDAO = new BooksDAO();
        }
    
    public function Index($message = "")
    {

          if (isset($_SESSION["email"]))
            {
                $booksList = $this->booksDAO->GetAll();
    
                require_once(VIEWS_PATH . "book-List.php");
            }else{

       
        require_once(VIEWS_PATH . "index.php");
     }

    }
}
