<?php
use PHPUnit\Framework\TestCase;
use App\Shapes\Rectangle;
use App\Collision\AABBCollisionDetector;

require_once __DIR__ . '/../src/Shapes/ShapeInterface.php';
require_once __DIR__ . '/../src/Shapes/Rectangle.php';
require_once __DIR__ . '/../src/Collision/CollisionDetectorInterface.php';
require_once __DIR__ . '/../src/Collision/AABBCollisionDetector.php';

class AABBCollisionDetectorTest extends TestCase {

    public function testCollisionDetected() {
        $rect1 = new Rectangle(0, 0, 10, 10);
        $rect2 = new Rectangle(5, 5, 10, 10);
        $detector = new AABBCollisionDetector();
        $this->assertTrue($detector->isColliding($rect1, $rect2));
    }
    
    public function testNoCollision() {
        $rect1 = new Rectangle(0, 0, 10, 10);
        $rect2 = new Rectangle(20, 20, 5, 5);
        $detector = new AABBCollisionDetector();
        $this->assertFalse($detector->isColliding($rect1, $rect2));
    }
    
    // Edge collision is not considered a collision
    public function testEdgeCollision() {
        $rect1 = new Rectangle(0, 0, 10, 10);
        $rect2 = new Rectangle(10, 0, 10, 10);
        $detector = new AABBCollisionDetector();
        $this->assertFalse($detector->isColliding($rect1, $rect2));
    }
}
