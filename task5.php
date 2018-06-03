<?php
$bmv = ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => '2015'];
$toyota = ['model' => 'Rav4', 'speed' => 100, 'doors' => 3, 'year' => '2016'];
$opel = ['model' => 'astra', 'speed' => 110, 'doors' => 4, 'year' => '2014'];
$cars = [$bmv, $toyota, $opel];
foreach ($cars as $value) {
    $name = strtoupper(array_search($value, get_defined_vars(), true));
    echo "Car $name<br>{$value['model']} {$value['speed']} {$value['doors']} {$value['year']}<br>";
}
