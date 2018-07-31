<?php
/*
$modelNum = unpack('H*', "Better33");

echo base_convert($modelNum[1], 16, 2) . "<br />";
echo pack('H*', base_convert('100001001100101011101000111010001100101011100100011001100110011', 2, 16)) . "<br />";
echo pack('H*', base_convert(base_convert($modelNum[1], 16, 2), 2, 16)) . "<br />";
*/


//WORKING MODEL
/*
$modelNum = "Why aren't these Titties real?";

echo bin2hex($modelNum) . "<br />";
echo pack("H*", bin2hex($modelNum)) . "<br />";
*/


$modelNum = "Better";
for($i = 0; $i <= strlen($modelNum); $i++) {
  echo $modelNum[$i] . "<br />";
}


?>
