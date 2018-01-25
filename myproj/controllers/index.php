<?php

class Index extends Controller{

    public function __construct() {
        
        $Uname = isset($_POST['uname']) ? $_POST['uname'] : '';
        $Pword = isset($_POST['pwd']) ? $_POST['pwd'] : '';

        if($Uname == ''){
            View::render("index");
        }else{ 
            require Model."index".Ext;
            Index_Model::mysqlQuery_login($Uname,$Pword);

            $LoggedInID = isset($_SESSION['loggedUserID']) ? $_SESSION['loggedUserID'] : '';
            
            if($LoggedInID != '')
            {
                echo 'Logged IN!';
            }
        }

        
    }

    

}