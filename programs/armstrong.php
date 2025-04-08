<?php 
$number = 153;
$original = $number;
$sum = 0;

while ($original != 0) {
    $digit = $original % 10;
    $cube = $digit * $digit * $digit;
    $sum += $cube;
    $original = (int) ($original / 10);
}

if ($sum == $number) {
    echo "$number is an Armstrong Number";
} else {
    echo "$number is not an Armstrong Number";
}
?>
