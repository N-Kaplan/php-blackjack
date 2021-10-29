<?php
declare(strict_types=1);

class Player
{
    private array $cards = [];
    private bool $lost = false;
    private const BLACKJACK = 21;

    public function hit(Deck $deck): array {
        //draw 1 card
        $this->cards[] = $deck->drawCard();
        if ($this->getScore($this->cards) > self::BLACKJACK) {
            $this->lost = true;
        }
        return $this->cards;
    }

    public function surrender($lost): void {
        $this->lost = true;
    }

    public function getScore($cards): int {
        return array_sum(array_column($cards, 'value')); //add up the cards' values
    }

    public function hasLost(): bool {
        return $this->lost;
    }

    public function __construct(Deck $deck)
    {
        //draw 2 cards
        $this->cards[] = $deck->drawCard();
        $this->cards[] = $deck->drawCard();
    }
}

