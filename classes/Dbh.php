<?php

class Dbh {
    //set your configs here
    private $host = "localhost";
    private $user = "root";
    private $db = "Zuriphp";
    private $password = "kaimarcii";

    public function connect(){
        return mysqli_connect($this->host, $this->user, $this->password, $this->db);
    }


}

?>

