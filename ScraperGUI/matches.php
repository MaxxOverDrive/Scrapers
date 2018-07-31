<?php

if(isset($_POST['images'])) {
  if(preg_match_all('/<img[^\/>]\/>/', $result, $matches)) {
    foreach($matches[1] as $match) {
      echo $match;
    }
  }
  else {
    $final_result = "<h1 class='finalResults'>Their are no images to match</h1>";
  }
}//END OF IF ISSET POST IMAGES

if(isset($_POST['tables'])) {
  if(preg_match_all('/<table.*>([\s\S]*?)<\/table>/', $result, $matches)) {
    foreach($matches[1] as $match) {
      echo $match;
    }
  }
}//END OF IF ISSET POST TABLES

if(isset($_POST['divs'])) {
  global $result;
  if(preg_match_all('/<div.*>([\s\S]*?)<\/div>/', $result, $matches)) {
    foreach($matches[1] as $match) {
      $div_matches[] = $match;
    }
    $final_result = var_dump($div_matches);
  }
}//END OF IF ISSET POST DIVS

/*
switch($page_match) {
  case Tables:
    if(preg_match_all('/<table.*>([\s\S]*?)<\/table>/', $result, $matches)) {
      foreach($matches[1] as $match) {
        echo $match;
      }
    }
  break;
  case Table_Rows:
    if(preg_match_all('/<tr.*>([\s\S]*?)<\/tr>/', $result, $matches)) {
      foreach($matches[1] as $match) {
        echo $match;
      }
    }
  break;
  case Table_Data:
    if(preg_match_all('/<td.*>([\s\S]*?)<\/td>/', $result, $matches)) {
      foreach($matches[1] as $match) {
        echo $match;
      }
    }
  break;
  case Images:
    if(preg_match_all('/<img[^\/>]\/>/', $result, $matches)) {
      foreach($matches[1] as $match) {
        echo $match;
      }
    }
  break;
  case Links:
    if(preg_match_all('/<a.*>([\s\S]*?)<\/a>/', $result, $matches)) {
      foreach($matches[1] as $match) {
        echo $match;
      }
    }
  break;
  case List_Items_Match:
    if(preg_match_all('/<li.*>([\s\S]*?)<\/li>/', $result, $matches)) {
      foreach($matches[1] as $match) {
        echo $match;
      }
    }
  break;
  default:
      echo "Please Choose a match!";
}//END OF SWITCH STATEMENT
*/

?>
