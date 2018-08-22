<?php
//inside the php file
$fso2 = new COM('Scripting.FileSystemObject'); //Execute the Imacro
$fso2 = NULL;
$iim2 = new COM("imacros");
$s2 = $iim2->iimInit("-runner -useragent ".$useragent); //change imacro user agent
$s2 = $iim2->iimSet("-var_website", $website1); //website parameter
$s2 = $iim2->iimSet("-var_file", $file1); //file content parameter
$s2 = $iim2->iimPlay("FileWriter");

 ?>
 inside the imacro file
 URL GOTO={{website}}
 ... do something like login i dont know what you want to do here
 TAG POS=1 TYPE=INPUT:TEXT FORM=NAME:f ATTR=NAME:content CONTENT={{file}}
 ... continue your imacro
