<?php

namespace Models;
class Books{

   private $CODE;
    private $title;
    private $price; 
   

   /**
    * Get the value of CODE
    */ 
   public function getCODE()
   {
      return $this->CODE;
   }

   /**
    * Set the value of CODE
    *
    * @return  self
    */ 
   public function setCODE($CODE)
   {
      $this->CODE = $CODE;

      return $this;
   }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}

?>