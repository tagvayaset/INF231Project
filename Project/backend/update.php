<?php 
    include 'config/connect2.php';

    $id = $_GET['updateid'];
    
    $query = "select * from feedback where id = $id";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $last_name = $row['phone'];
    $email = $row['email'];
    
    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $query = "update feedback set id ='$id', name = '$name', phone = '$phone',
        email = '$email' where id = $id";
        $result = mysqli_query($conn, $query);
        if($result){
            // echo 'updated succesfully';
            header('location:home.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="backend.css">
</head>
<body style = "background-color:  #2c2e31;">
    <form class = "form_class" method="post">
        <h1>Update</h1>	

        <input type="text"  placeholder="name" class="input" name="name" autocomplete ="off" >
                    
        <input type="text"  placeholder="phone" class="input" name="phone" autocomplete ="off"  >

        <input type="text" placeholder="email@gmail.com" class="input" name="email" autocomplete ="off">
                    
        <input type="submit" name='submit' value="update">
    </form>
	   
</body>
</html>
