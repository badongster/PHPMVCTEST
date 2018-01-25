<?php

class Session{

    protected $loggedUserID, $loggedIn;

    public function __construct()
    {
        $this->start_session();
    }

    public function start_session()
    {
        session_start();
    }

    public function destroy_session()
    {
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy(); 
    }

    public function setLoggedID($ID){
        $_SESSION["loggedUserID"] = $ID;
    }

    public function setLoogedInState($loginState){
        $_SESSION["loginState"] = $loginState;
    }

    public function getLoggedID(){
        return $this->loggedUserID;
    }

    public function getLoogedInState(){
        return $this->loggedIn;
    }

}