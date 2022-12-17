<?php

    include 'config/connect2.php';
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        echo($id);
        $query = "delete from people where id= $id";
        $result = mysqli_query($conn, $query);
        if($result){
            header('location:index.php');
        }else{
            die(mysqli_error($conn));
        }
    }

?>