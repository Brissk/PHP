<?php
/* 
Задание 2
Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). Используйте функции из п.1
*/

function summary(int $num_1, int $num_2):int {
$result = $num_1 + $num_2;
return $result;
}
function subtraction(int $num_1, int $num_2):int {
    $result = $num_1 - $num_2;
    return $result;
}
function multiply(int $num_1, int $num_2):int {
    $result = $num_1 * $num_2;
    return $result;
}
function division(int $num_1, int $num_2):int|float {
    return $num_2 == 0 ? "Ошибка деления на ноль" . "\n" : $num_1 / $num_2;
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
            return summary($arg1,$arg2);
        case '-':
            return subtraction($arg1,$arg2);
        case '*':
            return multiply($arg1,$arg2);
        case '/':
            return division($arg1,$arg2);
        default:
            return "Введите правильный знак";
    }
}

echo mathOperation(5,0,"/");