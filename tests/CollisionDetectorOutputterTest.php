<?php

use App\CollisionDetectorOutputter;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/CollisionDetectorOutputter.php';

class CollisionDetectorOutputterTest extends TestCase {

    public function testNoCollisionsOutput() {
        $collisions = [];
        $outputter = new CollisionDetectorOutputter($collisions);
        ob_start();
        $outputter->output();
        $output = ob_get_clean();
        $this->assertStringContainsString("No collisions detected", $output);
    }
    
    public function testCollisionsOutput() {
        $collisions = ["Shape 1 collides with Shape 2"];
        $outputter = new CollisionDetectorOutputter($collisions);
        ob_start();
        $outputter->output();
        $output = ob_get_clean();
        $this->assertStringContainsString("Collisions detected:", $output);
        $this->assertStringContainsString("Shape 1 collides with Shape 2", $output);
    }
}
