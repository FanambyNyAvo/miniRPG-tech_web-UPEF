<?php

require_once 'Character.php';

class Enemy extends Character {

    private bool $rageTriggered = false;

    public function __construct(int $x = 9, int $y = 9, int $hp = 20, int $attack = 5) {
        parent::__construct(
            name:   'Gobelin',
            hp:     $hp,
            attack: $attack,
            x:      $x,
            y:      $y
        );
    }

    public function checkRage(): bool {
        if (!$this->rageTriggered && $this->hp < 10) {
            $this->attack      = 8;
            $this->rageTriggered = true;
            return true;
        }
        return false;
    }

    public function isEnraged(): bool {
        return $this->rageTriggered;
    }
}
