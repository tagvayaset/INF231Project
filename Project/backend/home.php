<?php 
session_start();

     if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
     
     include('config/connect2.php');
     $query = 'select * from feedback';
     $result = $conn->query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="backend.css">
</head>
<body>

     <h1 style = "text-align: center;">Hello, <?php echo $_SESSION['name']; ?></h1>

     <table class="table table-striped table-dark">
        <tr>
            <th><h2>Name</h2></th>
            <th><h2>phone</h2></th>
            <th><h2>Email</h2></th>
            <th><h2>Message</h2></th>
            <th><h2>Edit</h2></th>
            <th><h2>Delete</h2></th>
        </tr>
        <?php 
            while($rows =  mysqli_fetch_assoc($result)){
                $id = $rows['id'];
                $name = $rows['name'];
                $phone = $rows['phone'];
                $email = $rows['email'];
                $text = $rows['text'];
        ?>
            <tr>
                <td><?php echo $name ?></td>
                <td><?php echo $phone ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $text ?></td>
                <td><button class = "success-button"><a class="btn btn-primary" href = "sendMail/answer.php? address= <?php echo $email ?> " > Answer </a></button></td>
                <td><button class = "danger-button"><a class="btn btn-danger" href = "delete.php? deleteid= <?php echo $id ?>" > Delete </a></button></td>
            </tr>
        <?php 
            }
        ?>  

    </table>
    <center><button class="success-button"><a  href="logout.php">Logout</a></button></center>
</body>
</html>
<?php } ?>