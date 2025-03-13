<?php
function get_random_number($min = 1, $max = 10) {
    $range = $max - $min + 1;
    $offset = rand(0, $range);
    return $offset + $min;
}
?>