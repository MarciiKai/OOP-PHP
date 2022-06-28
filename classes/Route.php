<?php

include "Dbh.php";
include "UserAuth.php";


class FormController extends userAuth{

   
    public $db;
    private $fullname;
    private $password;
    private $confirmPassword;
    private $country;
    private $gender;
    private $email;

    public function __construct(){
        $this->db = new Dbh();
    }

    public function handleForm(){
        $auth = new UserAuth();

        if(isset($_POST["register"])){
            $this->fullname = $_POST["fullnames"];
            $this->email = $_POST["email"];
            $this->password = $_POST["password"];
            $this->confirmPassword = $_POST["confirmPassword"];
            $this->country = $_POST["country"];
            $this->gender = $_POST["gender"];

            $auth->register($this->fullname , $this->email ,$this->password,$this->confirmPassword,$this->country,$this->gender);
            
            
        }
       
    }


}     
     

    
?>