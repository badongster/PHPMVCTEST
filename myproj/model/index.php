<?php

class Index_Model extends Model{

    protected $id;

    public function __construct(){

    }

    public function mysqlQuery_login($uname, $pwd){
        $result = parent::mysqlQuery("SELECT log_Id FROM logincred WHERE UserName='".$uname."' AND Password='".$pwd."'");

        if(mysqli_num_rows($result) > 0)  
        {
            while($row =  mysqli_fetch_array($result))  
            {  
                Session::setLoggedID($row['log_Id']);
                Session::setLoogedInState(true);
            }
        }

        // return $this->id;
    }

    public function getID(){
        return $this->id;
    }

}