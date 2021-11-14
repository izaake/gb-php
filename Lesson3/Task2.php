<?php

$i = 0;
do {
    if ($i === 0) {
        echo '0 – ноль.' . PHP_EOL;
        $i++;
        continue;
    }
    echo $i % 2 === 0 ? "$i - чётное число." . PHP_EOL : "$i - нечётное число." . PHP_EOL;
    $i++;
} while ($i <= 10);