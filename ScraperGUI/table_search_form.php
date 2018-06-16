<div class="row"><!--TABLE SEARCHES -->
  <div class="col-md-12">

      <form action="index.php" method="POST">

        <div class="row"><!--TABLE SEARCHES -->
          <div class="col-md-12">
            <h4>Database Actions</h4>
              <!--DABATASE ACTIONS -->
              <label class="radio-inline"><input type="radio" name="db_action" value="send_data">Send</label>
              <label class="radio-inline"><input type="radio" name="db_action" value="get_data">Receive</label>
          </div>
        </div>

        <!--LIST OF THINGS TO MATCH -->
        <div class="form-group">
          <label for="choose_matches">Search For</label>
          <select class="form-control" id="choose_matches">
            <option>Tables</option>
            <option>Table Rows</option>
            <option>Table Data</option>
            <option>Links</option>
            <option>Lists</option>
            <option>URL</option>
            <option>All</option>
          </select>
        </div>
        <input type="submit" name="submitMatch">
      </form>

    </div>
  </div>
