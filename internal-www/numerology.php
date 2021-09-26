<?php
error_reporting(0);
 
if($_POST)
 
{
// create an array based on chaldean numerology
 
$ar = array('A' => 1,
'B' => 2,
'C' => 3,
'D' => 4,
'E' => 5,
'F' => 8,
'G' => 3,
'H' => 5,
'I' => 1,
'J' => 1,
'K' => 2,
'L' => 3,
'M' => 4,
'N' => 5,
'O' => 7,
'P' => 8,
'Q' => 1,
'R' => 2,
'S' => 3,
'T' => 4,
'U' => 6,
'V' => 6,
'W' => 6,
'X' => 7,
'Y' => 1,
'Z' => 7);
 
//get the value entered by post method
$str = $_POST['str'];
//make it upper case. to avoid messing with small letters.
$str = strtoupper($str);
//find the length of the string entered
$len = strlen($str);
 
//set a temp value to calculate
$numero = 0;
 
//now loop through the string one by one and add the values
for($i=0; $i<$len; $i++)
{
$alpha  = $str[$i];
$numero = $ar[$alpha] + $numero;
}
//print the result
echo "NUMEROLOGY TOTAL IS: ". $numero;
}
 
?>
 
<html>
<body>
<form action="" method="post">
<input type="text" name="str"  value="" />
<input type="submit" value="calculate" />
</form>