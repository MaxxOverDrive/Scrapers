<?php

//include('db_conn_upcDeals.php');
include('simple_html_dom.php');

$newUPC = $_POST['upc'];

//Seriously This Is The Red Button. DO NOT SET TO 1700!!!
for($urlI1 = 1; $urlI1 <= 1; $urlI1++) {
  //Don't Change It To 999 Unless You Mean it!!!
      for($urlI2 = 1; $urlI2 <= 1; $urlI2++) {

        $html = new simple_html_dom();
            //Build an Array of URL's to Loop Through
            $url = $urlI1."-".$urlI2;

            $html->load_file('http://upcdeal.us/phtml/newindex' . $url . '.html');
            $upcSearch = $html->find('a');

            foreach($upcSearch as $upcNum) {
              ini_set('max_execution_time', 300);
                  if(is_numeric($upcNum->plaintext)) {
                    //$upcTemp[] = $upcNum->plaintext;
                    echo $upcNum->plaintext . '<br />';
                  }
            }
      }
}
//$newUPC = (array_unique($upcTemp));
//echo "This Bitch Has <h1>" . count($newUPC) . "</h1> Notches On Her Bed And Still Wears A White Dress";

  /*for($i = 0; $i <= count($newUPC); $i++) {
    //Inserting All Data Collected Into Database
    ini_set('max_execution_time', 300);
      $sqlUPCDeals = "INSERT INTO Master (upc)
                       VALUES('$newUPC[$i]')";
      $resultUPCDeals = mysqli_query($conn, $sqlUPCDeals);
  }

  //Checking To See If Shit Has Been Entered In The Database. She Says No But She Really Means Yes!
  if(mysqli_affected_rows($resultUPCDeals) > 0) {
      echo "This Bitch Has <h1>" . count($newUPC) . "</h1> Notches On Her Bed And Still Wears A White Dress Captain!!!";
  }
  else {
      echo "No Titties For You Captain! Just " . count($newUPC) . " Shits to clean up!";
  }

mysqli_close($conn);*/
?>
