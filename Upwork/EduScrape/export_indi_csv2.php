<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
$db_host = "";
$db_username = "";
$db_pass = "";
$db_name = "";

$conn2 = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

if(!$conn2) {
  die("Connection Failed: " . mysqli_connect_error());
}
else {
$export_id = $_POST['export_single_csv'];
$indi_export_csv_SQL = "SELECT * FROM BPPE1 WHERE id='$export_id'";
$indi_export_csv_Result = mysqli_query($conn2, $indi_export_csv_SQL);

if(mysqli_num_rows($indi_export_csv_Result) > 0) {
$GLOBALS['indi_export_csv_Result'] = $indi_export_csv_Result;
}
else {
echo "Some Indi CSV Voodoo!";
}

$indi_export_csv_Var = $GLOBALS['indi_export_csv_Result'];

while($indi_export_csv_Row = mysqli_fetch_assoc($indi_export_csv_Var)) {
  $csv_array = array($indi_export_csv_Row['school_code'], $indi_export_csv_Row['school'], $indi_export_csv_Row['phone'], $indi_export_csv_Row['county'], $indi_export_csv_Row['mailing_address'], $indi_export_csv_Row['physical_address'], $indi_export_csv_Row['approved_programs']);
  header('Content-Type: text/csv; charset=utf-8');
  header('Content-Disposition: attachment; filename=schoolData.csv');
  $output = fopen("php://output", "w");
  fputcsv($output, $csv_array);
  fclose($output);
}
}
mysqli_close($conn2);
?>
