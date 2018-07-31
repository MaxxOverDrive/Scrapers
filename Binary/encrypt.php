<?php

function encrypt($string) {
  $string = str_rot13($string);
  echo $string;
}
encrypt('Titties');
?>
