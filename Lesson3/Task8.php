<?php

$regions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Касимов', 'Кораблино', 'Михайлов', 'Новомичуринск', 'Рыбное', 'Ряжск']
];

foreach ($regions as $region => $cities) {
    echo "$region:" . PHP_EOL;
    foreach ($cities as $city) {
        if (mb_substr($city, 0, 1) === 'К') {
            $citiesWithK[] = $city;
        }
    }
    echo implode(', ', $citiesWithK) . PHP_EOL;
}
