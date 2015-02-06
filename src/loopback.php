<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
$show;
$check=array();
if ("GET"==$_SERVER['REQUEST_METHOD'])
{
	if ($check==$_GET)
	{
		echo " {\"Type\":\"GET\" , \"parameters\" : null}";
	}
	else
	{
		$show=json_encode($_GET);
		echo " {\"Type\":\"GET\" , \"parameters\" : $show}";
	}
}
else
{
	if ($check==$_POST)
	{
		echo " {\"Type\":\"POST\" , \"parameters\" : null}";
	}
	else
	{
		$show=json_encode($_POST);
		echo " {\"Type\":\"POST\" , \"parameters\" : $show}";
	}
}

?>