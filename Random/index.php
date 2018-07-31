<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Random Project Code!!!</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Random Project Code!!!</h1>
            <h3>Poker Table</h3>
            <div id="poker_table">
              <div class="table_seat" id="seat_1">Seat 1</div>
              <div class="table_seat" id="seat_2">Seat 2</div>
              <div class="table_seat" id="seat_3">Seat 3</div>
              <div class="table_seat" id="seat_4">Seat 4</div>
              <div class="table_seat" id="seat_5">Seat 5</div>
              <div class="table_seat" id="seat_6">Seat 6</div>
              <div class="table_seat" id="seat_7">Seat 7</div>
              <div class="table_seat" id="seat_8">Seat 8</div>
              <div class="table_seat" id="seat_9">Seat 9</div>
              <div class="table_seat" id="dealer">Dealer</div>

              <div id="active_card_box">
                <div class="active_cards" id="active_card_1"><?php $card ?></div>
                <div class="active_cards" id="active_card_2"><?php $card ?></div>
                <div class="active_cards" id="active_card_3"><?php $card ?></div>
                <div class="active_cards" id="active_card_4"><?php $card ?></div>
                <div class="active_cards" id="active_card_5"><?php $card ?></div>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center" id="cardDealer">
          <?php

            $cardValue = array("A_h", "A_S", "A_D", "A_C", "K_h", "K_S", "K_D", "K_C", "Q_h", "Q_S", "Q_D", "Q_C", "J_h", "J_S", "J_D", "J_C", "10_h", "10_S", "10_D", "10_C", "9_h", "9_S", "9_D", "9_C", "8_h", "8_S", "8_D", "8_C", "7_h", "7_S", "7_D", "7_C", "6_h", "6_S", "6_D", "6_C", "5_h", "5_S", "5_D", "5_C", "4_h", "4_S", "4_D", "4_C", "3_h", "3_S", "3_D", "3_C", "2_h", "2_S", "2_D", "2_C");
            $card = array_rand($cardValue, 2);

            if(isset($_POST['draw'])) {

              echo 'You drew a <br />' . $cardValue[$card[0]] . '<br />' . $cardValue[$card[1]];
            }

          ?>

          <form action="index.php" method="POST">
            <input type="submit" name="draw" value="Draw A Card">
          </form>

        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
