<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$url1 = "https://app.dca.ca.gov/bppe/view-voc-names.asp?schlname=&city=&county=&program=&program_keyword=&intJump=0&intRecords=2000";
$school_URL = "https://app.dca.ca.gov/bppe/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);

if(preg_match_all('/(.*?)<\/td>/', $result, $bppe1_matches)) {
  foreach($bppe1_matches[1] as $bppe1_match) {
    if(preg_match('/<a href=".*?([\s\S]*?)">/', $bppe1_match, $bppe1_links)) {
      $school_link[] = $bppe1_links[1];
    }
  }
}
curl_close($ch);


$ch2 = curl_init();
for($i = 0; $i < COUNT($school_link); $i++) {
  ini_set('memory_limit', '1024M');
  ini_set('max_execution_time', 300);
  curl_setopt($ch2, CURLOPT_URL, $school_URL.$school_link[$i]);
  curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
  $school_result = curl_exec($ch2);

  if(preg_match_all('/<td>([\s\S]*?)<\/td>/', $school_result, $school_pages)) {
    $approvedPrograms = array();
    for($a = 0; $a < COUNT($school_pages[1]); $a++) {
        $school_scrape = trim(preg_replace("/'/", "", $school_pages[1][0]));
        $phone_scrape = trim($school_pages[1][1]);
        $replace_array = array(')', '(', ' ');
        $new_phone = trim(str_replace($replace_array, '', $phone_scrape));
        $school_code_scrape = trim($school_pages[1][2]);
        $county_scrape = trim($school_pages[1][3]);
        $mailing_address_scrape = trim(preg_replace("/&nbsp;|<br \/>|\n|'/", "", $school_pages[1][4]));
        $physical_address_scrape = trim(preg_replace("/&nbsp;|<br \/>|\n|'/", "", $school_pages[1][5]));
      if($a > 7) {
        array_push($approvedPrograms, preg_replace("/'/", "", $school_pages[1][$a]));
      }

    }
    
    $approved_programs_scrape = implode(',', preg_replace('/<strong>|<\/strong>/', '', $approvedPrograms));

    $all_school_info_scrape_SQL = "INSERT INTO BPPE1_Scrape (school, phone, school_code, county, mailing_address, physical_address, approved_programs)
                                   VALUES ('$school_scrape', '$new_phone', '$school_code_scrape', '$county_scrape', '$mailing_address_scrape', '$physical_address_scrape', '$approved_programs_scrape')";

    if (!mysqli_query($conn, $all_school_info_scrape_SQL)) {
      echo("Error description: " . mysqli_error($conn))."<br>";
    }

  }
}
curl_close($ch2);
?>
