<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Matty's CMS!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
					<div id="page_title" class="col-md-12">
						<h1>Scraper GUI</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
          <div class="col-md-4">
						<h3>Add New Manufacturer</h3>
						<form action="index.php" method="POST">
							<input type="text" name="manufacturerArray">
							<input type="submit" name="submitCompete">
						</form>
					</div>
					<div class="col-md-4">
						<h3>Add New Competitor</h3>
						<form action="index.php" method="POST">
							<input type="text" name="competitorURLArray">
							<input type="submit" name="submitCompete">
						</form>
          </div>

					<div class="col-md-3">
						<!--LIST OF MANUFACTURERS -->
						<div id="manufactListDiv">
							<ul class="infoList">
								<li class="manufactListItem">Little Giant</li>
								<li class="manufactListItem">Valley Craft</li>
							</ul>
						</div>
						<!--LIST OF COMPETITORS -->
						<div id="competitorListDiv">
							<ul class="infoList">
								<li class="competitorListItem">custommhs.com</li >
								<li class="competitorListItem">sodyinc.com</li >
							</ul>
						</div>
					</div>
				</div>
      </div>

			<div class="row">
				<div class="col-sm-12">
					<div class="cols-sm-3">
						<h3>Add New URL</h3>
						<form action="index.php" method="POST">
							<input type="text" name="newURL">
							<input type="submit" name="submitNewURL">
						</form>
						<ul>
							<?php
								$newURLArray = array();
								if(isset($_POST["submitNewURL"])) {
								  $newURLArray[] = $_POST["newURL"];
								/*$cookie_name("newURL");
									$cookie_value("submitNewURL");
									setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");*/
								}
								for($u = 0; $u <= COUNT($newURLArray); $u++) { ?>
									<li><?php echo $newURLArray[$u]; ?></li>
					<?php }
							?>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-9">
						<input id="infoDisplay" type="textarea" name="displayInfo">
					</div>
					<div class="col-md-3">
						<form action="index.php" method="POST">
							<!--LIST OF THINGS TO MATCH -->
							<select>
								<option name="tables">Tables</option>
								<option>Table Rows</option>
								<option>Table Data</option>
								<option>Links</option>
								<option>Lists</option>
								<option>URL</option>
								<option>All</option>
							</select>
							<input type="submit" name="submitMatch">
						</form>
					</div>
				</div>

					</div>
	      </div>
	    </div>
		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
  </html>
