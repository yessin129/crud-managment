<?php
   require_once "db.conn.php";
// class aanmaken
   class users{
   public $username;
   public $password;
   public $email;
   public $phonenumber;

   //constructor maken

       public function __construct($username,$email,$password,$phonenumber)
       { $this->password = $password;
         $this->username = $username;
         $this->email = $email;
         $this->phonenumber = $phonenumber;
       }

   }