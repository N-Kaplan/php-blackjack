<?php
declare(strict_types=1);

class Player
{
    private array $cards = [];
    private bool $lost = false;

    public function hit(): bool {}
    public function surrender(): bool{}
    public function getScore(): int {}
    public function hasLost(): bool {}

}

