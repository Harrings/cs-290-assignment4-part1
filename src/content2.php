<?php
ob_start(); //from stack overflow
error_reporting(E_ALL);
ini_set('display_errors','On');
session_start();
if (!isset($_SESSION["username"]))
{
    header("Location: login.php", true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CS 290-Assignment 4 Content 2</title>
</head>
<body>
<img src="brady.jpg-large" alt="Im not mad bro" height="400" width="400">
<?php
	echo "<br> Click <a href=\"content1.php\">here</a> to see content1";
	echo "<br> Click <a href=\"logout.php\">here</a> to logout";
?>
</body>
</html>