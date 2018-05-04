<?php

$iim1 = new COM("imacros");
$s = $iim1->iimOpen("-runner");

$s = $iim1->iimSet("keyword", $_GET["keyword"]);
$s = $iim1->iimPlay($_GET["macro"]);

echo "iimPlay=";
echo $s;
echo "extract=";
echo $iim1->iimGetExtract;

$s = $iim1->iimClose();

?>
