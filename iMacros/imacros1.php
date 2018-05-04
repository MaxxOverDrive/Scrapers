<?php

//Array of URLs to Loop Through


//Get Variables From Somewhere
$asinVar = $GLOBALS['asinResult'];



$macro = file_get_contents("openiMacros.php");
$macro = str_replace("#_ASIN_#", $asin, $macro);
$macro = file_put_contents("windowTest1.iim", $macro);

?>
