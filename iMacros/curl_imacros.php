<?php
//To retrieve the current visitor's user agent string, use:
  echo $_SERVER['HTTP_USER_AGENT'];

//DISPLAYS BROWSER INFO
  $browser = get_browser(null, true);
    print_r($browser);

?>
