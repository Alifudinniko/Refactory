<?php
$n = 6;

for ($i = 1; $i <= ($n + 1); $i++) {
    for ($j = 1; $j <= ($n + 1); $j++) {




        if (($i == $j) || ($j == ($n + 2 - $i))) {
            echo (" # ");
        } else {
            echo "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp";
        }
    }
    echo "<br>";
}
