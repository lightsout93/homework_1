<?php
$allDrawings = 80;
$markerDrawings = 23;
$pensilDrawings = 40;
echo "Дана задача: На школьной выставке $allDrawings рисунков. $markerDrawings из них выполнены<br>
фломастерами, $pensilDrawings карандашами, а остальные — красками. Сколько рисунков,<br>
выполненные красками, на школьной выставке?<br>";
$paintsDrawings = $allDrawings - $markerDrawings - $pensilDrawings;
echo 'Красками выполнено рисунков:' . $allDrawings . '-' . $markerDrawings .
    '-' . $pensilDrawings . '=' . $paintsDrawings . '.<br>';
