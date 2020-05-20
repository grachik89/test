<?php

// Из now() получаешь знаечение дня недели и приводишь его к виду tue, fr и т.п.
$day = 'fr';

// Из now() получаешь знаечение часа и приводишь его к виду от 00 до 24
$hour = '10';

// Выгруженный с помощью SQL массив строк таблицы
$sourceArray = [
    'tue: 08-24',
    'tue: 08-24',
    'tue: 08-24',
    'fr: 17-18, 20-24; st: 08-14, 16-22',
    'fr: 17-18, 20-24; st: 08-14, 16-22',
    'tue: 08-24',
    'fr: 17-18, 20-24; st: 08-14, 16-22',
    'tue: 08-24',
    'tue: 08-24',
    'fr: 17-18, 20-24; st: 08-14, 16-22'
];

// Closure для использования в качестве callback-функции
$closure = function ($string) use ($day, $hour){
    // if (!preg_match('/' . $day . ': (?P<intervals>(?P<after_hour>[0-2][0-9])-(?P<before_hour[0-2][0-9]),?)+;/', $string, $matches)) {
    if (!preg_match('/' . $day . ': (?:(?P<intervals>[0-2][0-9]-[0-2][0-9](?:, )?))+/', $string, $matches)) {
        //echo 'no ' . $day . ' ' . $hour . '<br/>';
        return false;
    }

    var_dump($matches['intervals']);

    return true;
};

//var_dump(array_filter($sourceArray, $closure));
array_filter($sourceArray, $closure);