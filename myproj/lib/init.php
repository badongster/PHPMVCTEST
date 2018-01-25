<?php

class Startup_init {

    public function __construct() {
        
        $test = isset($_GET['url']) ? $_GET['url'] : '';
        if($test != ''){
            $urltrimed = rtrim($_GET['url'],'/'); 
            $routes = explode('/', $urltrimed);
            
            if(file_exists(Controller . $routes[0] . Ext)){
                require Controller . $routes[0] . Ext;
                new $routes[0]();
            }else{
                require Controller . ERROR_PAGE . Ext;
                new Err();
            }   
            //echo Controller . $routes[0] . Ext;
        }else{
            require Controller . INDEX_PAGE . Ext;
            new Index();
        }
    }
}