<?php

class Board {

    private int $size;

    public function __construct(int $size = 10) {
        $this->size = $size;
    }

    public function getSize(): int { return $this->size; }

    public function isValid(int $x, int $y): bool {
        return $x >= 0 && $x < $this->size && $y >= 0 && $y < $this->size;
    }

    public function distance(int $x1, int $y1, int $x2, int $y2): int {
        return abs($x1 - $x2) + abs($y1 - $y2);
    }

    public function render(
        int $heroX,   int $heroY,
        int $enemyX,  int $enemyY,
        ?int $potionX, ?int $potionY
    ): string {
        $output = '';

        for ($row = 0; $row < $this->size; $row++) {
            for ($col = 0; $col < $this->size; $col++) {
                if ($col === $heroX  && $row === $heroY)              $cell = '[H]';
                elseif ($col === $enemyX && $row === $enemyY)         $cell = '[E]';
                elseif ($potionX !== null && $col === $potionX && $row === $potionY) $cell = '[P]';
                else                                                   $cell = '[ ]';

                $output .= $cell;
            }
            $output .= "\n";
        }

        return $output;
    }
}
