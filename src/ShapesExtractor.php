<?php

namespace App;

use App\Shapes\Rectangle;

final class ShapesExtractor {
    
    public function extract(string $input): array
    {
        $lines = explode("\n", $input);
        $shapes = [];
        
        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line)) {
                continue;
            }
    
            // Expecting exactly four values per line.
            $parts = explode(',', $line);
            if (count($parts) !== 4) {
                echo "Invalid input line: '{$line}'. Expected format: x,y,width,height<br>";
                continue;
            }
    
            // Convert each part to a float.
            $x      = intval(trim($parts[0]));
            $y      = intval(trim($parts[1]));
            $width  = intval(trim($parts[2]));
            $height = intval(trim($parts[3]));
            
            // Create a Rectangle instance.
            $shapes[] = new Rectangle($x, $y, $width, $height);
        }

        return $shapes;
    }
}