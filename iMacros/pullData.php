<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
/*

$conn = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

if(!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}
else {
	$tennsco_data_SQL = "SELECT * FROM Competitors";
	$tennsco_data_Result = mysqli_query($conn, $tennsco_data_SQL);

	if(mysqli_num_rows($tennsco_data_Result) > 0) {
		$GLOBALS['tennsco_data_Result'] = $tennsco_data_Result;
	}
	else {
		echo "There is no such thing as Tennsco";
	}
	$tennsco_data_Var = $GLOBALS['tennsco_data_Result'];
*/

	$ch = curl_init();

	for($c = 1; $c <= 4; $c++) {
	  curl_setopt($ch, CURLOPT_URL, "https://www.custommhs.com/index.php?route=product/search&keyword=Little%20Giant&page=$c");
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	  $result = curl_exec($ch);

	    preg_match_all('/<div class="smallBoxBg.*?>([\s\S]*?)<\/div>/', $result, $custommhs_matches);

	    foreach($custommhs_matches[1] as $custommhs_match) {
	      if(preg_match_all('/<span.*?>([\s\S]*?)<\/span>/', $custommhs_match, $custommhs_items)) {
	        foreach($custommhs_items[1] as $custommhs_item) {
	          $custommhs_model[] = trim($custommhs_item);
	        }
	      }
	    }
	}
	echo "<table style='border: 1px solid black; text-align: center;'>";
	for($im = 0; $im < COUNT($custommhs_model); $im++) {
		echo "<tr>";
		if($im % 2 == 0) { ?>
				<td style="border: 1px solid black;" id="model_number"><?php echo $custommhs_model[$im]; ?></td>
			<?php
		}
		else { ?>
			<td style="border: 1px solid black;" id="list_price"><?php echo $custommhs_model[$im]; ?></td>
	<?php	}
	echo "</tr>";
	}
	  curl_close($ch);

echo "</table>";
/*
while($tennsco_data_Row = mysqli_fetch_assoc($tennsco_data_Var)) { ?>
	<tr>
		<td style="border: 1px solid black;" id="model_number"><?php echo $tennsco_data_Row['modelNum']; ?></td>
		<td style="border: 1px solid black;" id="description"><?php echo $tennsco_data_Row['partDesc']; ?></td>
		<td style="border: 1px solid black;" id="list_price"><?php echo $tennsco_data_Row['listPrice']; ?></td>
	</tr>
<?php }


}
mysqli_close($conn);
*/
?>
