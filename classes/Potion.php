<?php

class Potion {

    private int $x;
    private int $y;
    private int $healAmount;
    private bool $collected = false;

    public function __construct(int $x, int $y, int $healAmount = 10) {
        $this->x          = $x;
        $this->y          = $y;
        $this->healAmount = $healAmount;
    }

    public function isAtPosition(int $x, int $y): bool {
        return !$this->collected && $this->x === $x && $this->y === $y;
    }

    public function collect(): int {
        $this->collected = true;
        return $this->healAmount;
    }

    public function isCollected(): bool { return $this->collected; }
    public function getX(): int         { return $this->x; }
    public function getY(): int         { return $this->y; }
    public function getHealAmount(): int { return $this->healAmount; }
}
