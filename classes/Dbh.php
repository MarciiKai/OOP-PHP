<?php

class Dbh {
    //set your configs here
    private $host = "localhost";
    private $user = "USER";
    private $db = "Zuriphp";
    private $password = "PASSWORD";

    public function connect(){
        return mysqli_connect($this->host, $this->user, $this->password, $this->db);
    }


}

?>

