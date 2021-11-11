<?php

include_once 'Task3.php';

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'sum':
            return sum($arg1, $arg2);
        case 'difference':
            return difference($arg1, $arg2);
        case 'multiplication':
            return multiplication($arg1, $arg2);
        case 'division':
            return division($arg1, $arg2);
        default: return 'Передана неподдерживаемая операция';
    }
}

var_dump(mathOperation(1, -2, 'sum'));
var_dump(mathOperation(10, 2, 'difference'));
var_dump(mathOperation(0, 2, 'multiplication'));
var_dump(mathOperation(36, 5, 'division'));
