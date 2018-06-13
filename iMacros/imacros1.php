<?php

//Array of URLs to Loop Through

//Get Variables From Somewhere
$modelNum = array("F83730A8", "F85057A8", "F88567B4", "F88567B5");

for($i = 0; $i <= COUNT($modelNum); $i++) {
  if($os=="linux") {
    system("firefox http://www.google.com");
    sleep(5);
    system("firefox http://run.imacros.net/?
    m=windowTest1.iim");
  }
  else {
    system("start http://run.imacros.net/?
    m=model.iim");
  }
  $macro = file_get_contents("modeliMacros");
  $macro = str_replace("#_MODEL_#", $modelNum[$i], $macro);
  $macro = file_put_contents("model.iim", $macro);
}


?>
