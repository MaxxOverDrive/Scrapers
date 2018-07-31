<?php



if(isset($_POST['roll'])) {
  $rand = rand(1, 10);
  echo 'You rolled a ' . $rand;
}


?>

<form action="random.php" method="POST">
  <input type="submit" name="roll" value="Roll a die">
</form>
