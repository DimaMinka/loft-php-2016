<?php

// Задание 1

// #1
$name = 'Виталий';
$age = 43;
$age_second_digit = $age % 10;
switch ($age_second_digit) {
    case 1:
        $age_title = 'год';
        break;
    case 2:
    case 3:
    case 4:
        $age_title = 'года';
        break;
    default:
        $age_title = 'лет';
}
echo "Меня зовут: $name <br>";
echo "Мне " . $age . " $age_title <br>";
echo '“!|\\/’”\\<br>';

echo '<br>';

// #2
$pictures = 80;
$pictures_flomaster = 23;
$pictures_pencil = 40;

$pictures_painting = $pictures - ($pictures_flomaster + $pictures_pencil);
echo "Красками написано: $pictures_painting картин<br>";

echo '<br>';

// #3
define('CONSTANT', 'constant');
echo (defined('CONSTANT') ? "Константа определена и равна: " . CONSTANT : "Константа не определена.") . "<br>";
define('CONSTANT', 'new constant');
echo ((CONSTANT == 'new constant') ? "Константа переопределена и равна: "
    . CONSTANT : "Константа не переопределена.") . "<br>";

echo '<br>';

// #4
$age = 25;
if (($age>=18)&($age<=65)) {
    echo "Вам еще работать и работать";
}
elseif ($age>65) {
    echo "Вам пора на пенсию";
}
elseif (($age>=1)&($age<=17)) {
    echo "Вам ещё рано работать";
}
else {
    echo "Неизвестный возраст";
}
echo "<br>";

echo "<br>";

// #5

/**
 * BMW
 */
$bmw['model'] = "X5";
$bmw['speed'] = 120;
$bmw['doors'] = 5;
$bmw['year'] = 2015;

/**
 * Toyota
 */
$toyota['model'] = "RAV 4";
$toyota['speed'] = 130;
$toyota['doors'] = 3;
$toyota['year'] = 2014;

/**
 * Opel
 */
$opel['model'] = "Astra";
$opel['speed'] = 110;
$opel['doors'] = 4;
$opel['year'] = 2010;

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

var_dump($cars);
