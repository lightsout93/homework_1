<?php
const ALL_DRAWINGS = 80;
const MARKER_DRAWINGS = 23;
const PENCIL_DRAWINGS = 40;
echo 'Дана задача: На школьной выставке' . ALL_DRAWINGS . ' рисунков.' . MARKER_DRAWINGS . ' из них выполнены<br>'
. ' фломастерами, ' . PENCIL_DRAWINGS . ' карандашами, а остальные — красками. Сколько рисунков,<br>
выполненные красками, на школьной выставке?<br>';
$paintsDrawings = ALL_DRAWINGS - MARKER_DRAWINGS - PENCIL_DRAWINGS;
echo 'Красками выполнено рисунков:  ' . ALL_DRAWINGS . '-' . MARKER_DRAWINGS .
    '-' . PENCIL_DRAWINGS . '=' . $paintsDrawings . '.<br>';
