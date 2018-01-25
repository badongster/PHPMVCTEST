<?php

class Model{

    public function __construct(){

    }

    public function mysqlQuery($query){

        $mysqli=new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

        if($mysqli->connect_error){
            die('Connect Error');
        }

        $result = $mysqli->query($query);

        return $result;
    }

}