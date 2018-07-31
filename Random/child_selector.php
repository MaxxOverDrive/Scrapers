<?php
include('simple_html_dom.php');

$html = new simple_html_dom();
$html->load_file('http://www.upcitemdb.com/upc/884116169277');
$myArray = $html->find("div#info dl.detail-list dd");

for($i = 0; $i <= count($myArray); $i++) {

  }
echo $myArray[2]->plaintext . "<br />";

?>
