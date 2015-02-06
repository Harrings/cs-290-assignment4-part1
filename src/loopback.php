<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
$show;
if (isset($_GET))
{
$show=json_encode($_GET);
echo " \{Type:GET\}$show";
}
else
{
$show=json_encode($_POST);
}
echo " \{Type:POst\}$show";
?>