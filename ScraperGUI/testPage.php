<?php

include("simple_html_dom.php");
$html = new simple_html_dom();

$url1 = "https://www.custommhs.com/index.php?route=product/search&keyword=.$manufactName[$m]";

$pageNums = $html->find('/<div.*class\s*=\s*["'].*pagenation.*["']\s*>(.*)<\/div>/');

?>
