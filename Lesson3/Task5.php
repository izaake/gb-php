<?php

function spaceToUnderscore($string): string
{
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] === ' ') {
            $string[$i] = '_';
        }
    }
    return $string;
}

var_dump(spaceToUnderscore('Some test string'));
