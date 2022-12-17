<?php
    // include_once('config/connect2.php');
    // $query = "select*from user";
    // $result = $conn->query($query);

    require_once 'config/connect2.php';
    require_once 'config/functions.php';

    $result = displayData();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="backend.css">
</head>
<body class="logbody">
    <table class="table table-striped table-dark">
        <tr>
            <th><h2>Id</h2></th>
            <th><h2>Name</h2></th>
            <th><h2>Last Name</h2></th>
            <th><h2>Email</h2></th>
            <th><h2>Password</h2></th>
            <th><h2>Date</h2></th>
            <th><h2>Edit</h2></th>
            <th><h2>Delete</h2></th>
        </tr>

        <?php 
            while($rows =  mysqli_fetch_assoc($result)){
                $id = $rows['id'];
                $name = $rows['name'];
                $last_name = $rows['last_name'];
                $email = $rows['email'];
                $password = $rows['password'];
                $date = $rows['date'];
        ?>
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $last_name ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $password ?></td>
                <td><?php echo $date ?></td>
                <td><a class="btn btn-primary" href = "update2.php? updateid= <?php echo $id ?> " > Update </a></button></td>
                <td><a class="btn btn-danger" href = "delete.php? deleteid= <?php echo $id ?> " > Delete </a></button></td>
            </tr>
        <?php 
            }
        ?>  

    </table>
    <button class="btn btn-success jai"><a id="jai2" href = "lab7.html"> Sign up mode </a></button>
    <style>
        .jai{
            margin-left: 40%;
        } 
        #jai2{
            color: white;
            text-decoration: none;
        }
    </style>
</body>
</html>