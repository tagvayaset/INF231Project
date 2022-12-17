<?php 
session_start();

session_unset();
session_destroy();

header("Location: http://localhost/INF231Project-Asset/Project/HomePage.html");
?>