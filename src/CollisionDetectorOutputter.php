<?php

namespace App;

final class CollisionDetectorOutputter {
    public function __construct(
        private array $collisions
    ){
    }

    public function output(): void
    {
        if (empty($this->collisions)) {
            echo "No collisions detected.\n";
        } else {
            echo "Collisions detected: <br>";
            foreach ($this->collisions as $collision) {
                echo $collision . "<br>";
            }
        }
    }
}