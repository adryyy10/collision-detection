<?php
namespace App\Collision;

use App\Shapes\ShapeInterface;

interface CollisionDetectorInterface {
    /**
     * Checks if two shapes are colliding.
     *
     * @param ShapeInterface $a
     * @param ShapeInterface $b
     * @return bool True if the shapes collide, false otherwise.
     */
    public function isColliding(ShapeInterface $a, ShapeInterface $b): bool;
}
