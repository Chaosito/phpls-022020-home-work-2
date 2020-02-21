<?php
require('src/functions.php');

# Домашнее задание №2
// Задание №1
task1(['Каждый', 'элемент', 'масссива']);
print task1(['в', 'теге', htmlspecialchars('<p>')], 1);
print '<hr>';

// Задание №2
print task2('-', 2, 3, 6);
print '<hr>';

// Задание №3
task3(5, 6);
print '<hr>';

// Задание №4
task4();
print '<hr>';

// Задание №5
task5();
print '<hr>';

// Задание №6
$fileName = 'test.txt';
file_put_contents($fileName, 'Hello again!');
task6($fileName);
print '<hr>';

