          </tbody>
        </table>
      </div>
    </div>

    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
        <?php
        for($x = 1; $x <= $totalPages + 1; $x++) {
      		echo "<a style='border: 1px solid blue; padding: 1px;' href='?page=$x'>$x</a>";
      	}
        ?>
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

  if(empty($_POST['export_csv'])) {
    echo "You did not choose any schools to export";
  }
  else {
    include('export_indi_csv.php');
  }
}//END OF IF ISSET EXPORT CSV

if(isset($_POST['export_all_csv'])) {
  include('export_all_csv.php');
}

?>
