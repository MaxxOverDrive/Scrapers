<div class="row">
  <div class="col">
    <form action="index.php" method="POST">
      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="update_db_submit">Reload All Records</button>
      </div>
    </form>
  </div>
  <div class="col">
    <form action="index.php" method="POST">
      <div class="form-group">
        <button class="btn btn-success" type="submit" name="compare_submit">Run For Changes Only</button>
      </div>
    </form>
  </div>
  <div class="col">
    <form action="index.php" method="POST">
      <div class="form-group">
          <input type="text" name="user_search">
          <button class="btn btn-info" type="submit" name="search_submit">Search</button>
      </div>
    </form>
  </div>
</div>
