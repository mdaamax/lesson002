<?php
require 'mp3Player.php';


$players[] = new mp3Player();
$players[] = new VinilPlayer();
$players[0] -> addMusic('111');
$players[0] -> addMusic('222');
$players[0] -> addMusic('333');

foreach ($players as $player){
    $player-> play();
    $player-> swithDawn();
    $player-> play();
    $player-> swithDawn();
    $player-> swithDawn();
    $player-> swithDawn();
    $player-> swithDawn();
    $player-> swithDawn();
    $player -> play();
}
