<?php
//List All Values You Want To Replace
$find = array('is', 'string', 'example');
//List Values You Want To Replace With
$replace = array('IS', 'STRING', '');

//List Value You Want To Search Through
$string = "This is a string, and is an example.";

//Make New Array With New Values
$new_string = str_replace($find, $replace, $string);


//Display Result
echo $new_string;

?>
