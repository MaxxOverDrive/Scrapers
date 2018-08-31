</tbody>
</table>
</div>
</div>
<div style="margin: 1% 0 2% 0;" class="row">
<div class="col-md-10">

<button class="btn btn-outline-warning" type="submit" name="export_csv">Export Selected Records</button>
</form>
</div>

<div class="col-md-2">
<form action="export_all_csv.php" method="POST">
<button class="btn btn-outline-success" type="submit" name="export_all_csv">Export All Records</button>
</form>
</div>

</div>
</div>
</body>
</html>
<?php
if(isset($_POST['export_csv'])) {

if(empty($_POST['export_single_csv'])) {
echo "You did not choose any schools to export";
}
else {
include('export_indi_csv2.php');
}
}//END OF IF ISSET EXPORT CSV

if(isset($_POST['export_all_csv'])) {
include('export_all_csv.php');
}

?>
