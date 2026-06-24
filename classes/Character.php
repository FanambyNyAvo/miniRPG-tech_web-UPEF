<?php

abstract class Character {
    protected string $name;
    protected int $hp;
    protected int $maxHp;
    protected int $attack;
    protected int $x;
    protected int $y;

    public function __construct(string $name, int $hp, int $attack, int $x, int $y) {
        $this->name   = $name;
        $this->hp     = $hp;
        $this->maxHp  = $hp;
        $this->attack = $attack;
        $this->x      = $x;
        $this->y      = $y;
    }

    public function takeDamage(int $dmg): void {
        $this->hp = max(0, $this->hp - $dmg);
    }


    public function attack(Character $target): int {
        $dmg = $this->attack;
        $target->takeDamage($dmg);
        return $dmg;
    }

    public function move(string $direction, int $boardSize): void {
        switch ($direction) {
            case 'up':    $this->y = max(0, $this->y - 1); break;
            case 'down':  $this->y = min($boardSize - 1, $this->y + 1); break;
            case 'left':  $this->x = max(0, $this->x - 1); break;
            case 'right': $this->x = min($boardSize - 1, $this->x + 1); break;
        }
    }

    public function isAlive(): bool {
        return $this->hp > 0;
    }

    public function getName(): string  { return $this->name; }
    public function getHp(): int       { return $this->hp; }
    public function getMaxHp(): int    { return $this->maxHp; }
    public function getAttack(): int   { return $this->attack; }
    public function getX(): int        { return $this->x; }
    public function getY(): int        { return $this->y; }
}
