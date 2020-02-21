<?php

# Домашнее задание №2
// Задание №1
function task1($arrayWords, $ret = false)
{
    $str = implode('', array_map(function($el){return "<p>{$el}</p>";}, $arrayWords));

    if ($ret) {
        return $str;
    } else {
        print $str;
    }
}

// Задание №2
function task2($mathAction, ...$numbers)
{
    $res = 1;
    switch ($mathAction) {
        case '+': $res = 0; foreach($numbers AS $value) $res += $value; break;
        case '-': $res = 0; foreach($numbers AS $value) $res -= $value; break;
        case '*': foreach($numbers AS $value) $res *= $value; break;
        case '/': foreach($numbers AS $value) $res /= $value; break;
        case '%': foreach($numbers AS $value) $res %= $value; break;
    }
    return $res;
}

// Задание №3
function task3($num1, $num2)
{
    if (!is_int($num1) || !is_int($num2) || (int)$num1 < 1 || (int)$num2 < 1) {
        throw new Exception('Неверные входные данные, оба аргументы должны быть положительными целыми числами больше 0!');
    }

    print '<table cellpadding="5" cellspacing="0" border="1">';
    for ($i = 1; $i <= $num1; $i++) {
        print '<tr>';
        for ($j = 1; $j <= $num2; $j++) {
            print "<td style='text-align:center'>".($i * $j)."</td>";
        }
        print '</tr>';
    }
    print '</table>';
}

function task4()
{
    print date('d.m.Y H:i').'<br>';
    print strtotime('24.02.2016 00:00:00').'<br>';
}

function task5()
{
    $firstString = "Карл у Клары украл Кораллы";
    $secondString = "Две бутылки лимонада";

    print $firstString.' => '.str_replace('К','', $firstString).'<br>';
    print $secondString.' => '.str_replace('Две', 'Три', $secondString).'<br>';

}

function task6($fileForOpen)
{
    print file_get_contents($fileForOpen);
}
