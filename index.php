<?php
declare(strict_types=1);

session_start();

require 'code/Suit.php';
require 'code/Card.php';
require 'code/Deck.php';
require 'code/Blackjack.php';
require 'code/Player.php';
require 'code/Dealer.php';

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

function checkSession(){
    if(!isset($_SESSION["game"])){
        $_SESSION["game"] = new Blackjack();
    }
    return $_SESSION["game"];
}

$game = checkSession();
$deck = $game->getDeck();
$player = $game->getPlayer();
$dealer = $game->getDealer();

$message = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["hit"])) {
        if (!$player->hasLost()) {
            $player->hit($deck);
        }
    }
    if (isset($_POST["stand"])) {
        if (!$dealer->hasLost()) {
            $dealer->hit($deck);
        }
    }
    if (isset($_POST["surrender"])) {
        $player->surrender();
        unset($_SESSION["game"]);

        $game = checkSession();
        $deck = $game->getDeck();
        $player = $game->getPlayer();
        $dealer = $game->getDealer();

    }
}

$score_player = $player->getScore();


//$deck = new Deck();
//
//$deck->shuffle();
//foreach($deck->getCards() AS $card) {
//    echo $card->getUnicodeCharacter(true);
//    echo '<br>';
//}

whatIsHappening();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blackjack</title>
</head>
<body>
    <form method="post">
        <input type="submit" class="button" name="hit" value="Hit">
        <input type="submit" class="button" name="stand" value="Stand">
        <input type="submit" class="button" name="surrender" value="Surrender">
    </form>
</body>
</html>
