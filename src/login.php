<!DOCTYPE html>
<html lang="en">
<head>
  <title>CS 290-Assignment 4 login</title>
</head>
<body>
<?php
session_start();
ob_start(); //from stack overflow
error_reporting(E_ALL);
ini_set('display_errors','On');
if (isset($_SESSION["username"]))
{
	echo "You are already logged in as $_SESSION[username] <br>";
	echo "if you would like to view content click <a href=\"content1.php\">here</a>";
	echo "<br> Click <a href=\"logout.php\">here</a> to logout";
}
else
{
?>
	<form action="content1.php" method="post">
		<p>Your name: <input type="text" name="username" /></p>
		<input type="image" src="sherman.gif" name="submit" />
	</form>
<?php
}
?>
</body>
</html>
