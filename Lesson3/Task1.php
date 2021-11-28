<?php
$i = 0;
while ($i <= 100) {
    $i++;
    echo $i % 3 === 0 ? $i . PHP_EOL : '';
}
