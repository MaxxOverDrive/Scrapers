<?php

  if($os=="linux") {
    system("firefox http://www.google.com");
    sleep(5);
    system("firefox http://run.imacros.net/?
    m=windowTest1.iim");
  }
  else {
    system("start /B firefox http://run.imacros.net/?
    m=windowTest1.iim");
  }

?>
