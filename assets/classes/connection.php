<?php

class Connection {

    private
            $host = "localhost",
            $name = "my_pdo",
            $user = "root",
            $pass = "safipassword";

    public function Connect() {
//        return new PDO("mysql:host=$this->host; dbname=$this->name", $this->user, $this->pass);

        $mysqli = mysqli_connect("$this->host", "$this->user", "$this->pass", "$this->name");

        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }

}
