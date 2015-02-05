<?php
ob_start(); //from stack overflow
error_reporting(E_ALL);
ini_set('display_errors','On');
session_start();
if (isset($_POST["username"])&&isset($_SESSION["herebefore"]))
{
    header("Location: login.php", true);
}
if (!isset($_SESSION["username"]))
{
$_SESSION["username"]= $_POST["username"];
$_POST["username"]=null;
}
if (!isset($_SESSION["username"]))
{
    header("Location: login.php", true);
}
$_SESSION["herebefore"]=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CS 290-Assignment 4 Content 1</title>
</head>
<body>
<?php
if (!isset($_SESSION["visits"]))
{
	$_SESSION["visits"]=1;
}
else
{
	$_SESSION["visits"]=$_SESSION["visits"]+1;
}
if ($_POST["username"]==null||$_POST["username"]=="")
{
	echo "A username must be entered click <a href=\"login.php\">here</a> to return to login screen";
}
else
{
echo "Hello " . $_SESSION["username"];
echo "<br>You have visited this page   $_SESSION[visits]   times";
$_POST["username"]=null;
}


?>
</body>
</html>
