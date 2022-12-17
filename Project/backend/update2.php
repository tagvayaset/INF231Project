<?php 
    include 'config/connect2.php';

    $id = $_GET['updateid'];
    
    $query = "select * from people where id = $id";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    $password = $row['password'];
    $date = $row['date'];       

    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $date = $_POST['date'];
        $query = "update people set id ='$id', name = '$name', last_name = '$last_name',
        email = '$email', password = '$password', date = '$date' where id = $id";
        $result = mysqli_query($conn, $query);
        if($result){
            // echo 'updated succesfully';
            header('location:index.php');
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
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style>
	<div class="log">
		<h1>Update</h1>
		<form method="post">
			<div class="textField">
                <input type="text"  placeholder="name" id="name" name="name" autocomplete ="off" >
                <label>first name</label>
			</div>
			<div class="textField">				
                <input type="text"  placeholder="last name" id="last_name" name="last_name" autocomplete ="off"  >
                <label>last name</label>
			</div>
            <div class="textField">				
                <input type="text" placeholder="email@gmail.com" name="email" autocomplete ="off">
                <label>email </label>
			</div>
            <div class="textField">
                <input type="password" placeholder="password" name="password" autocomplete ="off">
                <label>password </label>				
			</div>

            <div class="textField">
                <input type="date" name="date">
                <label>date </label>				
			</div>
        	<input type="submit" name='submit' value="update">
		</form>
	</div>
   
</body>
</html>
