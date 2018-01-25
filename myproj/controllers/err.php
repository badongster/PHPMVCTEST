<?php

class Err extends Controller{

    public function __construct() {
        
        echo "We're in Index Error";

        View::render("error");
    }

}