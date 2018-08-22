<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

  $url_all = "https://www.craigslist.org/about/sites";
  //$url_main = "https://$city.craigslist.org/";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url_all);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $result = curl_exec($ch);

  if(preg_match('/<div id="map.*<\/div>([\s\S]*?)<\/footer>/', $result, $countryBoxMatches)) {
    if(preg_match_all('/<h1>(.*)<\/h1>/', $countryBoxMatches[1], $countryMatches)) {
      foreach($countryMatches[1] as $countryMatch) {
        $country[] = preg_replace('/(.*)">/', '', $countryMatch);
      }
    }//END COUNTRY
    if(preg_match_all('/<\/h1>([\s\S]*?)<h1>|<\/h1>([\s\S]*?)<footer>/', $countryBoxMatches[1], $country_sections)) {
      foreach($country_sections[0] as $country_section_box) {
        $country_section[] = $country_section_box;
      }
    }
  }
  curl_close($ch);

  for($i = 0; $i < COUNT($country_section); $i++) {
    if(preg_match_all('/<h4>(.*)<\/h4>/', $country_section[$i], $stateMatches)) {
      foreach($stateMatches[1] as $stateMatch) {
        $state[] = $stateMatch;
      }
    }//END STATE
    if(preg_match_all('/<li>([\s\S]*?)<\/li>/', $country_section[$i], $city_matches)) {
      foreach($city_matches[1] as $city_match) {
        if(preg_match('/<a href="([\s\S]*?)">/', $city_match, $city_urls)) {
          $city_url[] = $city_urls[1];
        }
        if(preg_match('/<a.*>(.*)<\/a>/', $city_match, $cities)) {
          echo $cities[1] . "<br>";
        }
      }
    }
  }//END FOR LOOP

  //START PARSING CRAIGSLIST CATEGORIES
  $food_and_bev_url = "/d/food-beverage-hospitality/search/fbh";
  $software_qa_url = "/d/software-qa-dba-etc/search/sof";
  $systems_network_url = "/d/systems-networking/search/sad";
  $web_design_url = "/d/web-html-info-design/search/web";
  $gigs_computer_url = "/d/computer-gigs/search/cpg";
  $barter_url = "/d/barter/search/bar";
  $sale_computers_url = "/d/computers/search/sya";
  $computer_parts_utl = "/d/computer-parts/search/syp";
  $electronics_url = "/d/electronics/search/ela";
  $rv_sale_url1 = "/d/recreational-vehicles/search/rva";//ALL RV's
  $rv_sale_url1 = "/search/rva?hasPic=1";//ALL RV's WITH PICS
?>
