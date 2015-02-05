<?php
ob_start(); //from stack overflow
error_reporting(E_ALL);
ini_set('display_errors','On');
session_start();
if (!isset($_SESSION["username"]))
{
$_SESSION["username"]= $_POST["username"];
}
if (!isset($_SESSION["username"]))
{
    header("Location: login.php", true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CS 290-Assignment 4 Content 1</title>
</head>
<body>
<?php
if (($_SESSION["username"]==null||$_SESSION["username"]==""))
{
	echo "A username must be entered click <a href=\"login.php\">here</a> to return to login screen";
}
else
{
	if (!isset($_SESSION["visits"]))
	{
		$_SESSION["visits"]=1;
	}
	else
	{
		$_SESSION["visits"]=$_SESSION["visits"]+1;
	}
	$_SESSION["herebefore"]=1;
	echo "Hello " . $_SESSION["username"];
	echo "<br>You have visited this page   $_SESSION[visits]   times";
	echo "<br> Click <a href=\"content2.php\">here</a> to see if Tom Brady is still mad";
	echo "<br> Click <a href=\"logout.php\">here</a> to logout";
}


?>
</body>
</html>
