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

	        <div class="col-md-9">

						<?php include('db_conn_form.php'); ?>

						<?php include('new_data_forms.php'); ?>

						<?php include('text_box_form.php'); ?>


					</div><!--col-9 top box-->


					<div class="col-md-3"><!--INFO DISPLAY BOX-->

						<?php include('choose_database_form.php'); ?>

						<?php include('choose_websites_form.php'); ?>

						<?php include('table_search_form.php'); ?>

		      </div><!--INFO DISPLAY BOX-->

				</div>
			</div>
		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
  </html>