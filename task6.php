<?php
echo '<table>';
for ($row = 1; $row <= 10; $row++) {
    echo '<tr>';
    for ($column = 1; $column <= 10; $column++) {
        $result = $row * $column;
        if ($result % 2 === 1) {
            echo "<td align='center'>($result)";
        } elseif (($row + $column) % 2 === 0) {
            echo "<td align='center'>[$result]";
        } else {
            echo "<td align='center'>$result";
        }
    }
    echo '</tr>';
}
echo '</table>';
