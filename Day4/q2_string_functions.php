 <?php
$string="My name is Himani";
$substring="Him";
$res=explode(" ",$string);
echo "Length of string is ".strlen($string)."<br>";
print_r($res);
echo "<br>"."Reverse the string is ".strrev($string)."<br>";
echo "All alphabet to upper case: ".strtoupper($string)."<br>";
echo "All alphabet to Lower case: ".strtolower($string)."<br>";
$result= substr_replace($string,$substring,11,16);
echo $result;
?> 