<?php
/* 
Задание 6
Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты.
*/

function timeCalc() : string {
    date_default_timezone_set('Europe/Moscow');
    $hour = date('G');
    $minute = date('i');

    if($minute % 10 == 1 && $minute != 11) {
        $minute_ending = "а";
    } else if ($minute != 12 && $minute % 10 == 2 || $minute != 13 && $minute % 10 == 3 || $minute != 14 && $minute % 10 == 4) {
        $minute_ending = "ы";
    } else {
        $minute_ending = "";
    }

    if($hour % 10 == 1 && $hour != 11) {
        $hour_ending = "";
    } else if ($hour != 12 && $hour % 10 == 2 || $hour != 13 && $hour % 10 == 3 || $hour != 14 && $hour % 10 == 4) {
        $hour_ending = "а";
    } else {
        $hour_ending = "ов";
    }

    return "$hour час$hour_ending $minute минут$minute_ending";
}

echo timeCalc();