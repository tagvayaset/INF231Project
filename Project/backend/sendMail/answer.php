<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/Project/backend/backend.css">
</head>
<body  style="background-color: #2c2e31;">
	
    
	<form class = "form_class" action="sendAnswer.php" method="post">
        <?php if(isset($_GET['address'])){
        $email = $_GET['address'];
        ?>
        <input type="text" value = " <?php echo $email ?> " name="email"  autocomplete = "off">
        <?php
        }else{
            header('location: http://localhost/Project/backend/home.php');
        }
        ?>		
        <input type="text" placeholder="subject" name = "subject"  autocomplete = "off">
        <input class = "textArea" type="textarea" placeholder="type your answer" name="message"  autocomplete = "off">
		<button type="submit" name="send" class="success-button">send</button>
	</form>

    
    <style>
        .form_class{            
            display: grid;
            place-items: center;
            align-items: center;
            background-color: rgb(214, 210, 210);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width:30%;
            height:400px; 
            border: 2px solid #ccc;
            padding: 30px;
            border-radius: 15px;
        }
    </style>


</body>
</html>
