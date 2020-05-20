<?php

require_once("new_config.php");

class Database {

    private $connection;


public function open_db_connection(){

    $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if(mysqli_connect_errno()){
        die("DB not connected. Error:" . mysqli_error());
    }

}





}

$database = new Database();
$database->open_db_connection();

