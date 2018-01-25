<?php  

    require 'conn.php';
        
    $sql = "DELETE FROM teacher WHERE t_Id = '".$_POST["id"]."'";  
    $result = $mysqli->query($sql);

    if($mysqli->query($sql))  
    {  
        echo 'Data Deleted';  
    }  
    $mysqli->close();
?>