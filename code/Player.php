<?php
declare(strict_types=1);

class Player
{
    protected array $cards = [];
    private bool $lost = false;
    private const BLACKJACK = 21;

    public function hit(Deck $deck): array {
        //draw 1 card
        $this->cards[] = $deck->drawCard();
        if ($this->getScore() > self::BLACKJACK) {
            $this->surrender();
        }
        return $this->cards;
    }

    public function surrender(): void {
        $this->lost = true;
    }

    public function getScore(): int {
        $score = 0;
        foreach($this->cards as $card) {
            $score += $card->getValue();
        }
        return $score;
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

