<?php
namespace App\Shapes;

interface ShapeInterface {
    public function getX(): int;
    public function getY(): int;
    public function getWidth(): int;
    public function getHeight(): int;
}
?>
