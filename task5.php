<?php
$bmv = ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => '2015'];
$toyota = ['model' => 'Rav4', 'speed' => 100, 'doors' => 3, 'year' => '2016'];
$opel = ['model' => 'astra', 'speed' => 110, 'doors' => 4, 'year' => '2014'];
$cars = ['BMV' => $bmv, 'TOYOTA' => $toyota, 'OPEL' => $opel];
foreach ($cars as $name => $value) {
    echo 'Car ' . $name . '<br>' . implode(' ', $value) . '<br>';
}
