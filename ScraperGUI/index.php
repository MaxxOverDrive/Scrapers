<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('memory_limit', '1024M');
ini_set('max_execution_time', 300);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Scraper GUI!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="container">

      <div class="row">
	       <div class="col-md-3">
						<div class="col-md-12 text-center">
						  <!--LIST OF DATABASES-->
						  <h4>Connect to Database</h4>
						</div>

						<form action="index.php" method="POST">
							<div class="col-md-12">
							      <ul>
							        <li class="infoList"><label><input class="form-check-input" type="radio" name="database_list" value="db_num1">ScraperGUI</label></li>
							        <li class="infoList"><label><input class="form-check-input" type="radio" name="database_list" value="db_num2">MattysBins</label></li>
							        <li class="infoList"><label><input class="form-check-input" type="radio" name="database_list" value="db_num3">CMS</label></li>
							      </ul>
							</div>
					    <div style="margin: -5% 0 3% 0;" class="col-md-12 text-center">
									<button type="submit" class="btn btn-info" name="db_conn_submit">Connect</button>
					    </div>
					</form>

					<div class="col text-center">
						<h4>Connect New Database</h4>
						<form id="db_connect_form" class="form-horizontal" action="index.php" method="POST">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="form-control" name="db_host" placeholder="Enter database host">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="form-control" name="db_username" placeholder="Enter username">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="password" class="form-control" name="db_pass" placeholder="Enter password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="form-control" name="db_name" placeholder="Enter database name">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12 text-center">
									<button type="submit" class="btn btn-info" name="new_db_submit">Connect</button>
								</div>
							</div>
						</form>
					</div><!--col-12 FORM WRAPPER-->
				</div><!--col-3 wrapper-->

				<div class="col-md-9" style="margin-top: 1%;">
					<div class="col-md-12">
						<div class="row">
					<?php
						if(isset($_POST['db_conn_submit'])) {
							$db_info = fopen("Databases/db_num1.csv", "r");
								if ($db_info) {
										while (($line = fgets($db_info)) !== false) {
												$db_conn[] = trim($line);
										}
										fclose($db_info);
								}
								else {
										echo "Something Happened!";
								}

							$conn = mysqli_connect("$db_conn[0]", "$db_conn[1]", "$db_conn[2]", "$db_conn[3]");

								if(!$conn) {
									die('error msg' . mysqli_connect_error());
								}
								else {
									$db_table_SQL = "SHOW TABLES FROM ".$db_conn[3]." ";
									$db_table_Result = mysqli_query($conn, $db_table_SQL);

									if(mysqli_num_rows($db_table_Result) > 0) {
										$final_result = "<h1 class='finalResults'>You are connected to ". preg_replace('/(.*)_/', '', $db_conn[3])."</h1>";
										$GLOBALS['db_table_Result'] = $db_table_Result;
										?>
											<div class="col-md-7"><!--NEW DATA FORMS-->
														<?php
												 			include('new_data_forms.php');
															include('database_info_forms.php');
														?>
						<?php }
									else {
										 $final_result = "<h1 class='finalResults'>There are no tables in the database!</h1>";
									}

								}
								mysqli_close($conn);
						}
						else {//ELSE db_conn_submit NOT SET
							?><div class="col-md-7"><!--INFO DISPLAY BOX--><?php
							include('database_info_forms.php');
						}
					?>
					</div><!--NEW DATA FORMS-->

							<div class="col-md-5">
								<?php include('choose_websites_form.php'); ?>
							</div>

						</div>

					</div><!--END COL-md-12-->
				</div><!--END COL-md-9 box wrap-->
			</div><!--END COL-12 PAGE WRAPPER-->

				<div class="col-md-12">
					<?php include('text_box_form.php'); ?>
				</div>

			</div>
		</div>
  </body>
  </html>
