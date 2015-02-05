<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multable</title>
</head>
<body>
<?php
 $errors=0;
//checking inputs exist
if ($_GET['min-multiplicand']==null)
{
	echo "Minimum multiplicand not given <br>";
	$errors++;
}
if ($_GET['max-multiplicand']==null)
{
	echo "Max multiplicand not given <br>";
	$errors++;
}
if ($_GET['min-multiplier']==null)
{
	echo "Minimum multiplier not given <br>";
	$errors++;
}
if ($_GET['max-multiplier']==null)
{
	echo "Maximum multiplier not given <br>";
	$errors++;
}
 $min1=$_GET['min-multiplicand'];
 $min2=$_GET["min-multiplier"];
 $max1=$_GET['max-multiplicand'];
 $max2=$_GET['max-multiplier'];
//checking if type integer
if ($min1!=(integer)$min1)
{
	echo "Minimum multiplicand not int. <br>";
	$errors++;
}
if ($max1!=(integer)$max1)
{
	echo "Max multiplicand not int. <br>";
	$errors++;
}
if ($min2!=(integer)$min2)
{
	echo "Minimum multiplier not int. <br>";
	$errors++;
}
if ($max2!=(integer)$max2)
{
	echo "Maximum multiplier not int. <br>";
	$errors++;
}

	

 $i;
 $j;
 $product;


if ($min1>$max1)
{
	echo "Minimum multiplicand larger then Maximum <br>";
	$errors++;
}
if ($min2>$max2)
{
	echo "Minimum multiplier larger then Maximum <br>";
	$errors++;
}
//if no errors displays table
if ($errors==0)
{
	echo "<table>";
	echo "  <caption>PHP table</caption>";
	echo    "<thead>";
	echo	  "<tr>";
	echo		"<th></th>";
	for ($i=$min2;$i<=$max2;$i++)
	{
		echo    "<th>$i</th>";
	}
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
	for ($j=$min1;$j<=$max1;$j++)
	{
		echo "<tr>";
		echo  "<th>$j</th>";
		for ($i=$min2;$i<=$max2;$i++)
		{
			$product=$i*$j;
			echo "<td>$product</td>";
		}
		echo "</tr>";
	}
}
?>


			  </tbody>
	</table>
	</body>
</html>