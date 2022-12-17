<?php 
    require_once('config/connect2.php');
    function displayData(){  
        global $conn;

        $query = 'select * from admins';
        $result = $conn->query($query);
        return $result; 
    }
?>