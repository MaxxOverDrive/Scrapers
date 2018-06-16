<div class="col-md-8"><!--CENTER TOP CONTAINER BOX-->

  <div class="col-md-6">
    <div class="col-md-12 text-center">
      <h4>Add New Competitor</h4>
    </div>
    <form action="index.php" method="POST">
      <input type="text" name="competitorURLArray">
      <input type="submit" name="submitCompete">
    </form>
  </div>

  <div class="col-md-6">
    <div class="col-md-12 text-center">
      <h4>Add New URL</h4>
    </div>
    <form action="index.php" method="POST">
      <input type="text" name="newURL">
      <input type="submit" name="submitNewURL">
    </form>
    <ul>
      <?php
        $newURLArray = array();
        if(isset($_POST["submitNewURL"])) {
          $newURLArray[] = $_POST["newURL"];
          /*$cookie_name = ("newURL");
          $cookie_value = ("submitNewURL");
          setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");*/
        }
        for($u = 0; $u <= COUNT($newURLArray); $u++) { ?>
          <li><?php echo $newURLArray[$u]; ?></li>
  <?php }
      ?>
    </ul>
  </div>

</div><!--CENTER TOP CONTAINER BOX-->
