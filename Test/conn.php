<?php

    $mysqli=new mysqli("localhost", "root", "", "test");
    if($mysqli->connect_error)
        die('Connect Error');

?>