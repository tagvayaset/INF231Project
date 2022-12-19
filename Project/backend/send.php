<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    
    //Database connection
    $conn = new mysqli('localhost','root','','lab8');

    if($conn->connect_error){
        echo "$conn->connect_error";
        die('Connection failed : ' .$conn->connect_error );
    }else{
        $stsm = $conn->prepare("insert into feedback(name, phone, email, text) 
                                values ( ?, ?, ?, ?)");
        $stsm->bind_param("ssss", $name, $phone, $email, $text);
        $stsm->execute();
        
        $stsm->close();
        $conn->close();
        // echo("succesfully");
        header("Location: http://localhost/project/HomePage.html");
    }
?>