<?php

$deckOfCards = "A_h, A_S, A_D, A_C, K_h, K_S, K_D, K_C, Q_h, Q_S, Q_D, Q_C, J_h, J_S, J_D, J_C, 10_h, 10_S, 10_D, 10_C, 9_h, 9_S, 9_D, 9_C, 8_h, 8_S, 8_D, 8_C, 7_h, 7_S, 7_D, 7_C, 6_h, 6_S, 6_D, 6_C, 5_h, 5_S, 5_D, 5_C, 4_h, 4_S, 4_D, 4_C, 3_h, 3_S, 3_D, 3_C, 2_h, 2_S, 2_D, 2_C, ";
$shuffled_deck = str_shuffle($deckOfCards);

echo $shuffled_deck;


?>
