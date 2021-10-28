<?php
declare(strict_types=1);

session_start();

require 'code/Suit.php';
require 'code/Card.php';
require 'code/Deck.php';
require 'code/Blackjack.php';
require 'code/Player.php';

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

$game = new Blackjack();
//$deck = new Deck();
//
//$deck->shuffle();
//foreach($deck->getCards() AS $card) {
//    echo $card->getUnicodeCharacter(true);
//    echo '<br>';
//}

whatIsHappening();