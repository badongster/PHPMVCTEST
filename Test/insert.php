<?php  
    
    require 'conn.php';
    
    $sql = "INSERT INTO teacher(FirstName, LastName) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."')";  
    $result = $mysqli->query($sql);
    $mysqli->close();
    
?> 