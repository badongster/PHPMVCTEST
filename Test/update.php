<?php  
    $connect = mysqli_connect("localhost", "root", "", "test");
    $id = $_POST["id"];  
    $text = $_POST["text"];  
    $column_name = $_POST["column_name"];  
    $sql = "UPDATE teacher SET ".$column_name."='".$text."' WHERE t_Id='".$id."'";  
    if(mysqli_query($connect, $sql))  
    {  
        echo 'Data Updated';  
    }  
?>