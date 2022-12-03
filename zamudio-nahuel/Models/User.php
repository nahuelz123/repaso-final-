<?php
namespace Models;
class User{

   private $userId;
    private $email; 
   private $PASSWORD; 
	

   /**
    * Get the value of userId
    */ 
   public function getUserId()
   {
      return $this->userId;
   }

   /**
    * Set the value of userId
    *
    * @return  self
    */ 
   public function setUserId($userId)
   {
      $this->userId = $userId;

      return $this;
   }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

   /**
    * Get the value of PASSWORD
    */ 
   public function getPASSWORD()
   {
      return $this->PASSWORD;
   }

   /**
    * Set the value of PASSWORD
    *
    * @return  self
    */ 
   public function setPASSWORD($PASSWORD)
   {
      $this->PASSWORD = $PASSWORD;

      return $this;
   }
}

?>