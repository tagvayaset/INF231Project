<?php
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    //Database connection
    $conn = new mysqli('localhost','root','','lab8');

    $query = 'select * from admins';
    $result = $conn->query($query);
    return $result;

    if($conn->connect_error){
        echo "$conn->connect_error";
        die('Connection failed : ' .$conn->connect_error );
    }else{
        $query = 'select * from admins';
        $result = $conn->query($query);
        return $result;

        if()
    }
?>