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

      if(preg_match_all('/<h4>(.*)<\/h4>/', $countryBoxMatches[1], $stateMatches)) {
        foreach($stateMatches[1] as $stateMatch) {
          $state[] = $stateMatch;
        }
      }//END STATE

      if(preg_match_all('/<\/h4>([\s\S]*?)<h4>|<\/h4>([\s\S]*?)<\/section>/', $countryBoxMatches[1], $stateBoxMatches)) {
        foreach($stateBoxMatches[0] as $stateBoxMatch) {
          if(preg_match_all('/<li>([\s\S]*?)<\/li>/', $stateBoxMatch, $city_matches)) {
            foreach($city_matches[1] as $city_match) {
              if(preg_match('/<a href="([\s\S]*?)">/', $city_match, $city_urls)) {
                $city_url[] = $city_urls[1];
              }
              if(preg_match('/<a.*>(.*)<\/a>/', $city_match, $cities)) {
                $city[] = $cities[1];
              }
            }
          }
        }
      }
      //echo $countryBoxMatches[1];
  }
  curl_close($ch);
?>
