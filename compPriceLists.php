<?php

//No path in URL. Acts like an affiliate link and takes you to ebay. Look into Automated Affiliate Directing.
//$redirect = "https://www.ebay.com/itm/like/391261543039?vectorid=229466&ttle=Valley+Craft+Drum+Snatcher+Mechanical+Forklift+Attachment+800+lb+Cap+f87398a2&tc=US&item=391261543039&rmvSB=true";


include("simple_html_dom.php");
$html = new simple_html_dom();

//Grab Model Numbers From Database
$modelNumber = "F85096A1";

//Load URLs FURTHER CHECKS NEED TO BE DONE WITH bmhequipment.com TO CONFIRM IT IS THE SAME ITEM. MULTIPLE PRODUCTS WITH SAME MODEL NUMBER. MATCH NAME ALSO?
//$custommhsURL = $html->load_file("https://www.custommhs.com/index.php?route=product/search&keyword=.$modelNumber");


//$bmhEquipmentURL = $html->load_file("https://www.bmhequipment.com/search/?term=.$modelNumber");
//$businesssupplysourceURL = $html->load_file("https://www.businesssupplysource.com/keyword/.$modelNumber./?mode_search=Y&keep_https=yes");
//$careForDeScientificURL  = $html->load_file("https://carefordescientific.com/search.php?search_query=.$modelNumber");
//$custommhsURL = $html->load_file("https://www.custommhs.com/index.php?route=product/search&keyword=.$modelNumber");
//$digitalBuyerURL = $html->load_file("https://www.digitalbuyer.com/catalogsearch/result/?dir=desc&order=relevance&q=.$modelNumber");
$globalIndustrialURL = $html->load_file("https://www.globalindustrial.com/searchResult?searchBox=&q=.$modelNumber");
//$ibuyOfficeSupplyURL = $html->load_file("https://ibuyofficesupply.com/catalogsearch/result/?q=.$modelNumber");
//$industrialSafetyURL = $html->load_file("https://industrialsafety.com/catalogsearch/result/?q=.$modelNumber");
//$nationwideIndustrialSupplyURL = $html->load_file("http://www.nationwideindustrialsupply.com/departments/cabinets-storage/tennsco-standard-counter-desk-high-cabinets/H.$modelNumber/");
//$sodyincURL = $html->load_file("http://www.sodyinc.com/index.php?main_page=advanced_search_result&search_in_description=1&keyword=.$modelNumber");
//$northernToolURL = $html->load_file("https://www.northerntool.com/shop/tools/NTESearch?storeId=6970&ipp=48&Ntt=.$modelNumber");
//$sodyincURL = $html->load_file("http://www.sodyinc.com/index.php?main_page=advanced_search_result&search_in_description=1&keyword=.$modelNumber.&x=0&y=0");
//$source4IndustriesURL = $html->load_file("https://source4industries.com/index.php?route=product/search&search=.$modelNumber");
//$todaysClassroomURL = $html->load_file("http://www.todaysclassroom.com/search.php?search_query=.$modelNumber.&Search=");
//$walmartURL = $html->load_file("https://www.walmart.com/search/?query=.$modelNumber");


//Search for Model Number and Prices
//$bmhEquipmentModel = $html->find("div.main ul li a.cbp-vm-title h3.cbp-vm-title");
//$bmhEquipmentPrice = $html->find("div.main ul li a.cbp-vm-title h3.cbp-vm-price");

//$custommhsModel = $html->find("img");//NEEDS WORK
//$businesssupplysource = $html->find("table.product_list_row tbody tr.google_impression_object td span");

$globalIndustrialNumResults = $html->find("div#search_body div#leftnav div#searchnav span");
$globalIndustrialModel = $html->find("div.grid ul.prod li div.info p.title a");
$globalIndustrialPrice = $html->find("div.grid ul.prod li div.pricing div.prices p.price");

//$northernToolModel = $html->find("div#result-set div.prod-listing img");

//Img ALTs only. Need to create path to attribute
/*$northernToolModel = $html->find("alt='Valley Craft EZY-Roll Auto Load Steel Drum Truck — 1,000-Lb. Capacity, Model# F82845A2 '");
  $custommhsHREF = "https://www.custommhs.com/index.php?route=product/product&amp;keyword=F87785B3&amp;product_id=10923";
*/

//$source4IndustriesModel = $html->find("div.product-grid ul.row li.first-in-line div.padding div.image a");//MODEL NUMBER IS IN href
//$todaysClassroomModel = $html->find("div.SearchContainer ul.ProductList li.ListView div.ProductDetails div.p-name a");

/*
foreach($bmhEquipmentModel as $modelNum) {
  echo $modelNum->plaintext;
}
*/


/*
foreach($businesssupplysource as $modelNum) {
  echo $modelNum->plaintext;
}*/


/*
foreach($custommhsModel as $modelNum) {
  echo $modelNum->plaintext;
}
*/


//Still needs to narrow down Children
foreach($globalIndustrialNumResults as $numResults) {
  echo $numResults->plaintext;
  echo "<br />";
}
foreach($globalIndustrialModel as $title) {
  $resultModels = $title->getAttribute("title");
  echo substr($resultModels, -strlen($modelNumber));
}
foreach($globalIndustrialPrice as $price) {
  echo $price;
}





/*
//NEED TO NARROW CHILD SELECTORS
foreach($todaysClassroomModel as $modelNum) {
  echo $modelNum->plaintext;
}
*/



?>
