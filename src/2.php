<?php

// Create an array of numbers between 1 and 10
$numbers = range(1, 10);

// Shuffle the array to randomize the order
shuffle($numbers);

// Print the first 5 numbers in the array
for ($i = 0; $i < 5; $i++) {
    echo $numbers[$i] . "\n";
}
?>