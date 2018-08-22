<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
/*
$iim1 = new COM("imacros");
$s = $iim1->iimOpen("-runner");

$s = $iim1->iimSet("keyword", $_GET["keyword"]);
$s = $iim1->iimPlay($_GET["ParserMain.iim"]);

echo "iimPlay=";
echo $s;
echo "extract=";
echo $iim1->iimGetExtract;

$s = $iim1->iimClose();
*/
?>
<?php
 	    $iim1 = new COM("C:\Users\codep\Documents\iMacros\Macros");
 	    $s = $iim1->iimOpen("-runner");
 	   // $s = $iim1->iimSet("keyword", $_GET["keyword"]);
 	    $s = $iim1->iimPlay($_GET["ParserMain.iim"]);

 	    echo "iimplay=";
 	    echo $s;
 	    echo "extract=";
   	    echo $iim1->iimGetExtract;

 	    $s = $iim1->iimClose();
   ?>
