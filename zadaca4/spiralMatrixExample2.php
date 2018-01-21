<?php

  // Size of edge of matrix
define("SIZE", 4);

  // Create empty array
$array = array();

  // Fill array with a spiral.
fillerUp($array);

// Start at 0 / 0  and recurse
function fillerUp(& $array, $x = 0, $y = 0, $count = 1, $direction = "right")
{
      // Insert value
    $array[$x][$y] = $count;

      // Try to insert next value. Stop if matrix is full.
    switch ($direction)
    {

    case "right":        
        if (! $array[($x + 1) % SIZE][$y])
            fillerUp($array, $x + 1, $y, ++$count, "right");
        elseif (! $array[$x][($y + 1) % SIZE])
            fillerUp($array, $x, $y + 1, ++$count, "down");        
        break;

    case "down":  
        if (! $array[$x][($y + 1) % SIZE])
            fillerUp($array, $x, $y + 1, ++$count, "down");
        elseif (! $array[($x - 1) % SIZE][$y])
            fillerUp($array, $x - 1, $y, ++$count, "left");        
        break; 

    case "left":   
        if (! $array[abs(($x - 1) % SIZE)][$y])
            fillerUp($array, $x - 1, $y, ++$count, "left");
        elseif (! $array[$x][abs(($y - 1) % SIZE)])
            fillerUp($array, $x, $y - 1, ++$count, "up");        
        break;

    case "up":                   
        if (! $array[$x][abs(($y - 1) % SIZE)])
            fillerUp($array, $x, $y - 1, ++$count, "up");        
        elseif (! $array[($x + 1) % SIZE][$y])
            fillerUp($array, $x + 1, $y, ++$count, "right");            
        break; 

    }
}

// Show answer.
echo "<pre>";
for ($y = 0; $y < SIZE; ++$y)
{
    for ($x = 0; $x < SIZE; ++$x)    
    {
        echo str_pad($array[$x][$y], 4, " ", STR_PAD_BOTH);
    }
    echo "\n";
}
echo "</pre>";
?>