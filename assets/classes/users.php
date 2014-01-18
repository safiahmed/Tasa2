<?php

require_once '../common.php';

//class Users
//{
//    protected $_mysql; 
//        protected $_query;
//
//
//        function __constructor($host,$username,$password,$db)
//        {
//            $this->_mysql = new mysqli($host,$username,$password,$db) or die('Problem connecting to the DB.');
//
//        }
//
//
//        function query($query)
//        {
//            $this->_query =  filter_var($query,FILTER_SANITIZE_STRING);
//            $stmt = $this->_prepareQuery();
//            $stmt->execute();
//            $results = $stmt->_dynamicBindResult($stmt);
//        }
//
//}


class Users {

    private
            $database,
            $connection,
            $mysqli,
            $xml,
            $host = "localhost",
            $name = "my_pdo",
            $user = "root",
            $pass = "safipassword";
   

    public function __construct() {
        $this->mysqli = mysqli_connect("$this->host", "$this->user", "$this->pass", "$this->name");

        $this->xml = simplexml_load_file('countries.xml');
        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }

    public function insert_user($name, $email) {
        $insert = $this->xml->state->add;
        if ($stmt = $this->mysqli->prepare($insert)) {
            $stmt->bind_param("ss", $name, $email);
            if (!mysqli_execute($stmt)) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        $stmt->close();
    }

}

$user = new Users();
$user->insert_user('safi', 'safi@gmail.com', '1');
