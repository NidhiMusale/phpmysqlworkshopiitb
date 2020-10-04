<!DOCTYPE html>
<html>
<form action="q6_a_php_html.php" method="GET">
	<input type="number"  name='a'  placeholder="enter side one" ><br>
	<input type="number"  name='b'  placeholder="enter side two"  ><br>
	<input type="number"  name='c'  placeholder="enter side three" ><br>
	<input type="submit" name="Result"  >
</form>

</html>
<?php 
@$name1 = $_GET['a'];
@$name2 = $_GET['b'];
@$name3 = $_GET['c'];
if($name1==$name2 && $name2==$name3 && $name1== $name3)
{
	echo "equilateral";
}
elseif($name1==$name2 || $name2==$name3 || $name1==$name3)
{
	echo "isoceles";
}
elseif(($name1*$name1+$name2*$name2== $name3*$name3)|| ($name3*$name3+$name2*$name2== $name1*$name1) || ($name1*$name1+$name3*$name3== $name2*$name2))
{
	echo "Right angle Triangle";
}
else
{
	echo "scalene";
}
?>



	


