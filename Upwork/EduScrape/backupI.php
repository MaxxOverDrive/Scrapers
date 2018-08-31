<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	$conn = NEW MySQLi("", "", "", "");
	$rpp = 50;
	isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;

	if($page > 1) {
		$start = ($page * $rpp) - $rpp;
	}
	else {
		$start = 0;
	}

	$resultSet = $conn->query("SELECT id FROM BPPE1");
	$numRows = $resultSet->num_rows;
	$totalPages = $numRows / $rpp;
	$scrapedSet = $conn->query("SELECT * FROM BPPE1_Scrape");
	$resultSet = $conn->query("SELECT * FROM BPPE1 ORDER BY school LIMIT $start, $rpp");


  include('header.php');
  include('topForms.php');
  include('tableHeader.php');

  if(isset($_POST['compare_submit'])) {
    include('allSchoolParser.php');
  }//END IF ISSET
  if(isset($_POST['update_db_submit'])) {
    include('allSchoolParser2.php');
  }
  if(isset($_POST['search_submit']) && !empty($_POST['user_search'])) {
    $user_search = $_POST['user_search'];
    include('userSearch.php');
  }
  elseif(isset($_POST['show_current_school'])) {
    include('objectTable.php');
  }
  elseif(isset($_POST['show_new_records'])) {
    include('newRecords.php');
  }
  elseif(isset($_POST['show_deleted_records'])) {
    include('deletedRecords.php');
  }
  elseif(isset($_POST['show_changed_records'])) {
    include('changedRecords.php');
  }
  else {
    include('objectTable.php');
  }

  include('bottomCSV.php');

?>
