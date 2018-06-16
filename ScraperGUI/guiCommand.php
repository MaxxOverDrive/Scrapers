<?php
//ON CLICK APPEND VALUES ONTO ARRAYS
$manufacturerArray = array();
$competitorURLArray  = array();
$tableMatch = '/<table[^>]*>(?:.|\n)*<\/table>/';
$tbRowMatch = '/<tr[^>]*>(?:.|\n)*<\/tr>/';
$tdMatch = '/<td[^>]*>(?:.|\n)*<\/td>/';
$linkMatch = '/<a[^>]*>(?:.|\n)*?<\/a>/';
$urlMatch = array();
$listMatch = array();
$allMatch = '/<body[^>]*>(.*?)<\/body>/';
$displayInfo = array();

//STORAGE ARRAYS



//preg_match_all("/<div><ol><li><a>(.*?)<\/a><\/li><\/ol><\/div>/", $result, $matches);

//$manufacturers = array_values(array_unique($matches[0]));

//CREATE A LOOP FOR COLLECTING AND STORING INFO FOR CLIENT      CREATES FILE WITH INFO
//CREATE FIND AND REPLACE METHOD?
//SESSIONS AND COOKIES FOR MEMORY

?>
