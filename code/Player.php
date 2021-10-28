<?php
declare(strict_types=1);

require 'Blackjack.php';

class Player
{
    private array $cards = [];
    private bool $lost = false;

    public function hit(): bool {}
    public function surrender(): bool{}
    public function getScore(): int {}
    public function hasLost(): bool {}

    public function __construct(Deck $deck)
    {
        //draw 2 cards
        $this->cards[] = $deck->drawCard();
        $this->cards[] = $deck->drawCard();
    }
}

