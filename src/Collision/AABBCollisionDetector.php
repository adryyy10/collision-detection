<?php
namespace App\Collision;

use App\Shapes\ShapeInterface;

/**
 * Uses Axis-Aligned Bounding Box (AABB) collision detection.
 */
final class AABBCollisionDetector implements CollisionDetectorInterface {

    public function isColliding(ShapeInterface $a, ShapeInterface $b): bool {
        return ($a->getX() < $b->getX() + $b->getWidth()) &&
               ($a->getX() + $a->getWidth() > $b->getX()) &&
               ($a->getY() < $b->getY() + $b->getHeight()) &&
               ($a->getY() + $a->getHeight() > $b->getY());
    }
}
