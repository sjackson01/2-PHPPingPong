<?php
/* !PingPong PHP APP! */
$player1 = 0;
$player2 = 5;
$round = 0;
//var_dump($player1 - $player2);
//var_dump($player2 - $player1);
//WIN
//player must reach a score of 11
//player must be a minimum of 2 point higher than opponent

//NOT WINNER
//randomly increment one of player scores each round

//Contiue to loop if abs player1 and player2 is less than 11
//Or player1 and player2 are both less than 11
while(abs($player1 - $player2)<2 || $player1 < 11 && $player2 < 11){
    //Increment and display round
    $round++;
    echo "<h2> Round $round</h2>\n";
    //Randomly add a point player1 oe player2 using rand function
    //Specify minimum and maximum int for rand 
    //We will receive 0 false and 1 true which can evaluate within conditional
    if(rand(0,1)){
        //If 1 (true) is returned we can add 1 to player1
        $player1++;
        } else {
        //If 0 (false) is returned we can add 1 to player2
        $player2++;    
        }
        //Display current score for this round
        echo "Player1 = $player1<br />\n";
        echo "Player2 = $player2<br/>\n";
    }
//Summary
echo "<h1>";
if ($player1 > $player2){
    echo "Player1";
}else{
    echo "Player2";
}
echo " is the winner after $round rounds!</h1>\n";
?>