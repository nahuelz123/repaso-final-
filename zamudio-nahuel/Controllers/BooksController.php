<?php

namespace Controllers;

use DAO\BooksDao;
use Models\Books;

class BooksController
{
    private $booksDao;

    public function __construct()
    {
        $this->booksDao = new BooksDao();
    }

    public function addBooks($code, $title, $price)
    {

        $booksList = $this->booksDao->GetAll();

        $aux = 0;
        foreach ($booksList as $dato) {
            if ($dato->getCODE() == $code) {
?>
                <script type="text/javascript">
                    alert("ya existe en el sistema!");
                </script>
<?php
                $aux = 1;
                require_once(VIEWS_PATH . "book-add.php");
            }
        }
        if ($aux == 0) {

            $newBooks = new Books();

            $newBooks->setCODE($code);
            $newBooks->setTitle($title);
            $newBooks->setPrice($price);

            $this->booksDao->Add($newBooks);
            /*
            echo "<script> if(confirm('registro exitoso!'));";
            echo "window.location = '../index.php';</script>";*/
            $this->ShowListView();
        } 
    }

    public function ShowListView()
    {
        $booksList = $this->booksDao->GetAll();

         require_once(VIEWS_PATH."book-list.php");
    }




    public function ShowAddView()
    {
        require_once(VIEWS_PATH . "book-add.php");
    }



    public function delete($code)
    {
     
        $booksList=$this->booksDao->GetAll();
       
        foreach($booksList as $books)
        {
            if($code==$books->getCode())
            {
               
                $this->booksDao->delete($code);
                $this->ShowListView();
                    
                
            }
        }
       
        
    }
    

}
