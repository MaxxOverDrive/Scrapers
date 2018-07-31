<?php

//Affiliate Ad Iframe Code
$adCode = "";

//Adding Slashes to Iframe
$code_slashes = htmlentities(addslashes($adCode));

//Insterting Into Database
    "INSERT INTO";

//Selecting From Database
    "SELECT FROM";

//Removing $code_slashes
$code_slashes = htmlentities(stripslashes($adCode));

echo $adCode;
?>
