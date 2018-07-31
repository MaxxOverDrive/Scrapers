<?php
//CURRENTLY CANT GET THE RETURN VALUE FROM THE FUNCTION
if(preg_match_all('/<div class="smallBoxBg>([\s\S]*?)<div class="smallBoxBottom*>/', $result, $web_pages)) {
  foreach($web_pages[1] as $web_page) {
    echo $web_page;
  }
}
/*
for($i = 0; $i <= COUNT($page); $i++) {
  if(preg_match_all('/<div class="smallBoxBg>([\s\S]*?)<div class="smallBoxBottom*>/', $page[$i], $custommhs_matches)) {
    foreach($custommhs_matches[1] as $custommhs_match) {
      echo $custommhs_match;
    }
  }
}
*/
?>
