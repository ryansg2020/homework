<?php
//array_merge

$country = array('Japan', 'Spain', 'UK');
$city = array ('Osaka', 'Barcelona', 'London');
$food = array ('Takoyaki', 'Tapas', 'Fish&Chips');

$reps_merge = array_merge($country, $city, $food);
print_r($reps_merge);

?>