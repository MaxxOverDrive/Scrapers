<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


$conn = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

if(!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}
else {
  $item_object_SQL = "SELECT * FROM Competitors";
  $item_object_Result = mysqli_query($conn, $item_object_SQL);

  if(mysqli_num_rows($item_object_Result) > 0) {
    $GLOBALS['item_object_Result'] = $item_object_Result;
  }

   class Item {
     public $modelNumber;
     public $description;
     public $price;

     public function get_item_info() {

     }
   }

   $item = new Item;

   $item_object_Var = $GLOBALS['item_object_Result'];

   while($item_object_Row = mysqli_fetch_assoc($item_object_Var)) {
     $item->modelNumber = $item_object_Row['modelNum'];
     $item->description = $item_object_Row['partDesc'];
     $item->price = $item_object_Row['listPrice'];
   }

   echo $item->get_item_info();


 }
 mysqli_close($conn);
?>
