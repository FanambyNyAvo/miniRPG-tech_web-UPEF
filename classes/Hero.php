<?php

require_once 'Character.php';

class Hero extends Character {

    public function __construct(int $x = 0, int $y = 0, int $hp = 30, int $attack = 7) {
        parent::__construct(
            name:   'Aldric',
            hp:     $hp,
            attack: $attack,
            x:      $x,
            y:      $y
        );
    }

    public function heal(int $amount): int {
        $before   = $this->hp;
        $this->hp = min($this->maxHp, $this->hp + $amount);
        return $this->hp - $before;
    }
}
