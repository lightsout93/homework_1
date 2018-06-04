<?php
const MIN_AGE = 0;
const MIDDLE_AGE = 18;
const MAX_AGE = 65;
$age = rand(0, 100);
echo $age . '<br>';
if ($age >= MIDDLE_AGE and $age <= MAX_AGE) {
    echo "Вам еще работать и работать";
} elseif ($age > MAX_AGE) {
    echo "Вам пора на пенсию";
} elseif ($age > MIN_AGE and $age < MIDDLE_AGE) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}
