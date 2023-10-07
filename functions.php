<?php

function task1 ($arr, $second = false) {

        if (!is_bool($second)) {
            $problem = "Второй аргумент не является true или false";
            return $problem;
        }

        if ($second == false) {
            $problem = "Сегодня никому не везет";
            return $problem;
        }

        if ($second == true) {
            $result = '';
            /*for ($i = 0; $i < count($arr);$i++ ) {
                $result .=  $arr[$i];
            }*/

            $result = implode($arr);

            return $result;
        } else {
            for ($i = 0; $i < count($arr);$i++ ) {
                echo '<p>' . $arr[$i] . '</p>';
            }
        }
}

function task2 (...$params) {

    $arifmetika = array("-", "+", "*", "/");

    if (!in_array($params[0], $arifmetika)) {
        $oblom = 'Эээээээ, там нету арифметических операторов дон';
        return $oblom;
    }
    
    for ($i = 1; $i < count($params); $i++) {
        if (!is_numeric($params[$i])) {
            $oblom2 = 'Ээээээ, какой-то из аргументов не чило дон';
            return $oblom2;
        }
    }

    $result = '';

    if ($params[0] == '+') {
        for ($i = 1; $i < count($params); $i++) {
            $result += $params[$i];
        }
    } elseif ($params[0] == '-') {
        for ($i = 1; $i < count($params); $i++) {
            $result -= $params[$i];
        }
    } elseif ($params[0] == '*') {
        $result = 1;
        for ($i = 1; $i < count($params); $i++) {
            $result *= $params[$i];
        }
    } elseif ($params[0] == '/') {
        $result = 1;
        for ($i = 1; $i < count($params); $i++) {
            $result /= $params[$i];
        }
    } 

    return $result;
}

function task3 ($num1, $num2) {

    if (!is_int($num1) || !is_int($num2)) {
        $nointeger = 'Один или оба аргументов не являются целыми числами';
        return $nointeger;
    } else {
        if ($num1 == 0 || $num2 == 0 ) {
            $nozero = 'Аргумент не должен быть равен нулю';
            return $nozero;
        } elseif ($num1 >= $num2 || $num2 > 10) {
            $norazm = 'Аргумент 1 не должен быть больше аргумента 2, или равен ему, при этом аргумент 2 не должен быть больше 10';
            return $norazm;
        }
    }
    
    echo '<table>';
    for ($i = $num1; $i <= $num2; $i++) {
        if ($i == $num1) {
            echo '<tr>';
            for ($s = 1; $s <= $i-1; $s++) {
                echo '<td></td>';
            }
            for ($k = $i*$i; $k <= $i*10; $k = $k + $i) {
                  echo '<td>'. $k . '</td>';
            }
            echo '</tr>';
    
        } elseif ($i != $num1 && $i != $num2 ) {
    
            echo '<tr>';
            for ($k = $i; $k <= $i*10; $k = $k + $i) {
                  echo '<td>'. $k . '</td>';
            }
            echo '</tr>';
    
        } elseif ($i == $num2) {
            echo '<tr>';
            for ($k = $i; $k <= $i*$num2; $k = $k + $i) {
                  echo '<td>'. $k . '</td>';
            }
            echo '</tr>';
        }
    
    }
    echo '</table>';
    

}