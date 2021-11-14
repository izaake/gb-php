<?php

function translite ($string) {
    $alphabet = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'yo',
        'ж' => 'je',
        'з' => 'ze',
        'и' => 'i',
        'й' => 'y',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'shi',
        'ъ' => '',
        'ы' => 'i',
        'ь' => '',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya'
    ];
    $string = mb_strtolower($string);

    for ($i = 0; $i <= mb_strlen($string); $i++) {
        if (in_array(preg_split("//u", $string)[$i], array_keys($alphabet))) {
            echo $alphabet[preg_split("//u", $string)[$i]];
        } elseif (preg_split("//u", $string)[$i] === ' ') {
            echo '_';
        } else {
            echo preg_split("//u", $string)[$i];
        }
    }
}

translite('Проверка перевода текста');