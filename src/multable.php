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
var $errors=0;
//checking inputs exist
if ($_GET['min-multiplicand']==null)
{
	echo "Minimum multiplicand not given <br>";
	errors++;
}
if ($_GET['max-multiplicand']==null)
{
	echo "Max multiplicand not given <br>";
	errors++;
}
if ($_GET['min-multiplier']==null)
{
	echo "Minimum multiplier not given <br>";
	errors++;
}
if ($_GET['max-multiplier']==null)
{
	echo "Maximum multiplier not given <br>";
	errors++;
}
//checking if type integer
if (!is_int($_GET['min-multiplicand']))
{
	echo "Minimum multiplicand not int. <br>"
	errors++;
}
if (!is_int($_GET['max-multiplicand']))
{
	echo "Max multiplicand not int. <br>"
	errors++;
}
if (!is_int($_GET['min-multiplier']))
{
	echo "Minimum multiplier not int. <br>"
	errors++;
}
if (!is_int($_GET['max-multiplier']))
{
	echo "Maximum multiplier not int. <br>"
	errors++;
}

	
var $min1=$_GET['min-multiplicand'];
var $min2=$_GET['min-multiplier'];
var $max1=$_GET['max-multiplicand'];
var $max2=$_GET['max-multiplier'];
var $i;
var $j;
var $product;


if ($min1>$max1)
{
	echo "Minimum multiplicand larger then Maximum <br>";
	errors++;
}
if ($min2>$max2)
{
	echo "Minimum multiplier larger then Maximum <br>";
	errors++;
}
//if no errors displays table
if (errors==0)
{
	echo "<table style="width:100%">";
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