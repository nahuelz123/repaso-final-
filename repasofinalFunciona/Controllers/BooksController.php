<?php

namespace Controllers;

use DAO\BooksDAO as BooksDAO;
use Models\Books as Books;

class BooksController
{
    private $booksDao;

    public function __construct()
    {
        $this->booksDao = new BooksDAO();
    }





    public function ShowAddView()
    {
        require_once(VIEWS_PATH . "bookAdd.php");
    }



    public function ShowListView()
    {
        $booksList = $this->booksDao->GetAll();

        require_once(VIEWS_PATH . "booksList.php");
    }


    public function NewAdd($code, $title, $price)
    {
        $book = new Books();
        $book->setCODE($code);
        $book->setTitle($title);
        $book->setPrice($price);

        return $book;
    }


    public function Add($code, $title, $price)
    {
        $booksList = $this->booksDao->GetAll();

        $i = 0;

        foreach ($booksList as $book) {
            if ($book->getCode() == $code) {
                $i = 1;

                ?>
                <script type="text/javascript">
                    alert("ya existe en el sistema!");
                </script>
<?php
  require_once(VIEWS_PATH . "bookAdd.php");
            }
        }

        if ($i == 0) {

            $book = $this->NewAdd($code, $title, $price);

            $this->booksDao->Add($book);
            $this->ShowListView();
        }
    }
}
