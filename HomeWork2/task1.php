<?php
/* 
Задание 1 
Реализовать основные 4 арифметические операции в виде функций с двумя параметрами – два параметра это числа. Обязательно использовать оператор return. Проверьте деление на ноль и верните текст , ошибка деления на ноль.
*/

function summary(int $num_1, int $num_2):int {
$result = $num_1 + $num_2;
return $result;
}
function subtraction(int $num_1, int $num_2):int {
    $result = $num_1 - $num_2;
    return $result;
}
function miltiply(int $num_1, int $num_2):int {
    $result = $num_1 * $num_2;
    return $result;
}
function division(int $num_1, int $num_2):int {
    if($num_2 == 0) {
        echo "Ошибка деления на ноль" . "\n";
        return 0;
    } else {
        $result = $num_1 / $num_2;
        return $result;
    }
}

echo division(5,0);