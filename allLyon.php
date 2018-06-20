<?php

$conn = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

  if(!$conn) {
    die('error msg' . mysqli_connect_error());
  }
  else {
    ini_set('memory_limit', '1024M');
    $modelNum = $_POST['modelNum'];
    $shortDesc = $_POST['shortDesc'];
    $longDesc = $_POST['longDesc'];
    $listPrice = $_POST['listPrice'];
    $ourCost = $_POST['ourCost'];
  }
    require_once "../Classes/PHPExcel.php";

    $tmpfname = "AllLyon.xlsx";
    $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
    $excelObj = $excelReader->load($tmpfname);
    $worksheet = $excelObj->getActiveSheet();
    $lastRow = $worksheet->getHighestRow();

    $i = 0;

    //Searching the excel sheet
    for($excelRow = 1; $excelRow <= $lastRow; $excelRow++) {

        $modelNum[$i] = trim(preg_replace('/^xx.{0}|^DD.{0}|^FF.{0}|^NF.{0}/', '', $worksheet->getCell('A'.$excelRow)->getValue()));
        $shortDesc[$i] = $worksheet->getCell('B'.$excelRow)->getValue();
        $longDesc[$i] = $worksheet->getCell('C'.$excelRow)->getValue();
        $listPrice[$i] = round($worksheet->getCell('D'.$excelRow)->getValue(), 2);
        $ourCost[$i] = round(($listPrice[$i] * .45), 2);


        $sql = "INSERT INTO alllyon (modelNum, shortDesc, longDesc, listPrice, ourCost)
                 VALUES ('$modelNum[$i]', '$shortDesc[$i]', '$longDesc[$i]', '$listPrice[$i]', '$ourCost[$i]')";

        $result = mysqli_query($conn, $sql);

        $i++;
    }


    if(mysqli_affected_rows($conn) > 0) {

      echo COUNT($modelNum) . "Things Should Be Entered!";
    }
    else {
      echo "No Things Entered!";
    }

  mysqli_close($conn);
  ?>
