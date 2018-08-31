<div style="border: 1px solid black; margin-bottom: 1%;" class="row text-center">
  <div class="col-md-3">
    <form action="index.php" method="POST">
        <button class='col btn' type='submit' name='show_current_school'>Current Record Set<br>COUNT(<?php echo COUNT($school_id); ?>)</button>
    </form>
  </div>
  <div class="col-md-3">
    <form action="index.php" method="POST">
      <button class='col btn' type='submit' name='show_new_records'>Display Newly Added Records<br>COUNT(<?php echo COUNT($new_school_id); ?>)</button>
    </form>
  </div>
  <div class="col-md-3">
    <form action="index.php" method="POST">
      <button class='col btn' type='submit' name='show_deleted_records'>Show Deleted Records<br>COUNT(<?php echo COUNT($deleted_school_id); ?>)</button>
    </form>
  </div>
  <div class="col-md-3">
    <form action="index.php" method="POST">
      <button class='col btn' type='submit' name='show_changed_records'>Show Changed Recourds<br>COUNT()</button>
    </form>
  </div>
</div>

<div class="row">
  <div class="col-md-12">

      <form action="export_indi_csv.php" method="POST">
        <table class="table table-striper table-hover dataTable text-center">
          <thead style="font-weight: bold; font-size: 115%;" class="text-center">
            <tr class="tableHeader">
              <td></td>
              <td class="tableHeaderData">School</td>
              <td class="tableHeaderData">Phone</td>
              <td class="tableHeaderData">County</td>
              <td class="tableHeaderData">Mailing Address</td>
              <td class="tableHeaderData">Physical Address</td>
              <td class="tableHeaderData">Approved Programs</td>
            </tr>
          </thead>
          <tbody>
