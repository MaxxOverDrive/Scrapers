<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Scraper GUI!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="container">
      <div class="row">
				<div class="col-md-12">

	        <div class="col-md-3">

						<?php include('new_db_conn_form.php'); ?>

					</div><!--col-9 top box-->

					<div class="col-md-5"><!--INFO DISPLAY BOX-->

						<?php include('new_data_forms.php'); ?>


		      </div><!--INFO DISPLAY BOX-->

					<div class="col-md-4">

						<?php include('choose_websites_form.php'); ?>

					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<?php include('text_box_form.php'); ?>

				</div>
			</div>
		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
  </html>
