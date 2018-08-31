<?php
/*
  while($bppe1_scrape_Row = mysqli_fetch_assoc($bppe1_scrape_Var)) {
    $csv_array = array($bppe1_scrape_Row['school_scrape'], $bppe1_scrape_Row['phone_scrape'], $bppe1_scrape_Row['city_scrape'], $bppe1_scrape_Row['county_scrape']);
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=schoolData.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, $csv_array);

    echo $bppe1_scrape_Row['school_scrape'];
    echo $bppe1_scrape_Row['phone_scrape'];
    echo $bppe1_scrape_Row['city_scrape'];
    echo $bppe1_scrape_Row['county_scrape'];

  }
  fclose($output);
*/

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $db_host = "";
    $db_username = "";
    $db_pass = "";
    $db_name = "";

    $conn2 = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

    if(!$conn2) {
      die("Connection Failed: " . mysqli_connect_error());
    }
    else {

    $scraped_table_SQL = "SELECT * FROM BPPE1_Scrape";
    $scraped_table_Result = mysqli_query($conn2, $scraped_table_SQL);

    if(mysqli_num_rows($scraped_table_Result)) {
      $GLOBALS['scraped_table_Result'] = $scraped_table_Result;
    }

    $scraped_table_Var = $GLOBALS['scraped_table_Result'];

    while($scraped_table_Row = mysqli_fetch_assoc($scraped_table_Var)) {
      ini_set('memory_limit', '1024M');
      ini_set('max_execution_time', 300);
      $csv_array = array($scraped_table_Row['school_code'], $scraped_table_Row['school'], $scraped_table_Row['phone'], $scraped_table_Row['county'], $scraped_table_Row['mailing_address'], $scraped_table_Row['physical_address'], $scraped_table_Row['approved_programs']);
      header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=schoolData.csv');
      $output = fopen("php://output", "w");
      fputcsv($output, $csv_array);
      fclose($output);
    }

  }
  mysqli_close($conn2);






  $result = $db_con->query('SELECT * FROM `some_table`');
if (!$result) die('Couldn\'t fetch records');
$num_fields = mysql_num_fields($result);
$headers = array();
for ($i = 0; $i < $num_fields; $i++) {
    $headers[] = mysql_field_name($result , $i);
}
$fp = fopen('php://output', 'w');
if ($fp && $result) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="export.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');
    fputcsv($fp, $headers);
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        fputcsv($fp, array_values($row));
    }
    die;
}

?>
