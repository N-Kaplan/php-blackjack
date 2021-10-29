<?php

declare(strict_types=1);

class Dealer extends Player
{
    private const MINIMUM = 15;
    public function hit(Deck $deck): array {
        while ($this->getScore() < self::MINIMUM) {
            parent::hit($deck);
        }
        return $this->cards;
    }
}