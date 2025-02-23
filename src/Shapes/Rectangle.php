<?php

namespace App\Shapes;

final class Rectangle implements ShapeInterface
{
    public function __construct(
        private int $x,
        private int $y,
        private int $width, 
        private int $height
    ){
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}