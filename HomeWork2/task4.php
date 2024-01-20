<meta charset="utf-8">
<?php
/* 
Задание 4
Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). Написать функцию транслитерации строк.
*/
mb_internal_encoding('UTF-8'); //установить нужную кодировку
error_reporting(E_ALL);            // включить вывод отчётов ошибок
ini_set('display_errors', 'on');

$alphabet = [
    'а' => 'a',   'б' => 'b',   'в' => 'v',
    'г' => 'g',   'д' => 'd',   'е' => 'e',
    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
    'и' => 'i',   'й' => 'y',   'к' => 'k',
    'л' => 'l',   'м' => 'm',   'н' => 'n',
    'о' => 'o',   'п' => 'p',   'р' => 'r',
    'с' => 's',   'т' => 't',   'у' => 'u',
    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
    'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
];

$str = "Как дела!";
function transliteration ($alphabet, string $str) {
    $str_to_array = mb_str_split($str);
    $result = "";
    for ($i=0; $i < count($str_to_array) ; $i++) { 
        if($alphabet[strtolower($str_to_array[$i])]) {
            $result .= $alphabet[strtolower($str_to_array[$i])];
        } else {
            $result .= $str_to_array[$i];
        }
    }
    return $result;
}

echo transliteration($alphabet, $str);