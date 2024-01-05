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
function division(int $num_1, int $num_2):int {
    if($num_2 == 0) {
        echo "Ошибка деления на ноль" . "\n";
        return 0;
    } else {
        $result = $num_1 / $num_2;
        return $result;
    }
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
            echo "Введите правильный знак";
            break;
    }
}

echo mathOperation(5,0,"/");