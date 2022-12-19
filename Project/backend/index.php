<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="backend.css">
</head>
<body  style="background-color: #2c2e31;">
	
	<form class = "form_class" action="login.php" method="post">
		<h2>Login</h2>
		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
			
		<input style="line-height: 30px;" type="text"  placeholder="Login" id="login" name="login" autocomplete = "off" >
		
		<input style="line-height: 30px;" type="password" placeholder="Password" name="password" autocomplete = "off">
		
		<button type="submit" name="submit" class="success-button">Login</button>
	</form>
</body>
</html>