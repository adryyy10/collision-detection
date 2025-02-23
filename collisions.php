<?php
require_once 'src/Shapes/ShapeInterface.php';
require_once 'src/Shapes/Rectangle.php';
require_once 'src/Collision/CollisionDetectorInterface.php';
require_once 'src/Collision/AABBCollisionDetector.php';
require_once 'src/CollisionDetectorOutputter.php';
require_once 'src/ShapesExtractor.php';

use App\Collision\AABBCollisionDetector;
use App\CollisionDetectorOutputter;
use App\ShapesExtractor ;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Extract the shapes from the input.
    $input = $_POST['rectangles'] ?? '';
    $shapesExtractor = new ShapesExtractor();
    $shapes = $shapesExtractor->extract($input);
    
    if (empty($shapes)) {
        echo "No valid shape data provided.";
        exit;
    }

    $collisionDetector = new AABBCollisionDetector();
    $collisions = [];
    $count = count($shapes);
    
    for ($i = 0; $i < $count; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            if ($collisionDetector->isColliding($shapes[$i], $shapes[$j])) {
                // Adding 1 to the index for a more user-friendly output.
                $firstShape = $i + 1;
                $secondShape = $j + 1;
                $collisions[] = "Shape {$firstShape} collides with Shape {$secondShape}";
            }
        }
    }
    
    // Output the collision results.
    $collisionDetectorOutputter = new CollisionDetectorOutputter($collisions);
    $collisionDetectorOutputter->output();
    
} else {
    echo "Invalid request method.";
}
?>
