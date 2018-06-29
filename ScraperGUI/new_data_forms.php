<div class="col-md-12"><!--CENTER TOP CONTAINER BOX-->


  <div class="col-md-6">
    <form action="index.php" method="POST">

      <div class="form-group">
        <div class="col-md-12 text-center">
          <h4>Database Actions</h4>
          <!--DABATASE ACTIONS -->
          <label class="radio-inline"><input type="radio" name="db_action" value="send_data">Send</label>
          <label class="radio-inline"><input type="radio" name="db_action" value="get_data">Receive</label>
        </div>
      </div>

      <?php
        $db_table_Var = $GLOBALS['db_table_Result'];
      ?>

      <div class="form-group">
        <div class="col-md-12 text-center">
          <h4 for="database_action_dropdown">Database Tables</h4>
          <select class="form-control" id="database_action_dropdown"><!-- FIGUR OUT NAME, VALUE & ID -->
            <?php
              while($db_table_Row = mysqli_fetch_assoc($db_table_Var)) { ?>
                <option><?php echo $db_table_Row['TABLES']; ?></option>
        <?php  }  ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-12 text-center">
          <button class="btn btn-success" type="submit" name="submitCompete">Submit</button>
        </div>
      </div>

    </form>
  </div>


</div><!--CENTER TOP CONTAINER BOX-->
