<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Matty's CMS!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <h1>Scraper GUI</h1>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-6">
            <h3>Add New Info!</h3>
            <form action="guiCommand.php" method="POST">
              <input type="text" value="manufacturerArray">
              <input type="text" value="competitorURLArray">
              <input type="submit" value="Submit">
            </form>
          </div>

          <div class="col-md-6">
            <h3>Current Info!</h3>
            <!--LIST OF MANUFACTURERS -->
            <ul>
              <li><?php  ?></li>
            </ul>
            <!--LIST OF COMPETITORS -->
            <ul>
              <li><?php  ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
  </html>
