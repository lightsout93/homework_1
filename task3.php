<?php
$age = rand(0, 100);
if (18 <= $age and $age <= 65) {
    echo "Вам еще работать и работать";
} elseif (65 < $age) {
    echo "Вам пора на пенсию";
} elseif (1 < $age and $age < 17) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}
