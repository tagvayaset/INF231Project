<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    //Database connection
    $conn = new mysqli('localhost','root','','lab8');

    if($conn->connect_error){
        echo "$conn->connect_error";
        die('Connection failed : ' .$conn->connect_error );
    }else{
        $stsm = $conn->prepare("insert into feedback(name, phone, email) 
                                values ( ?, ?, ?)");
        $stsm->bind_param("sss", $name, $phone, $email);
        $stsm->execute();
        
        $stsm->close();
        $conn->close();
        // echo("succesfully");
        header("Location: http://localhost/project/HomePage.html");
    }
?>