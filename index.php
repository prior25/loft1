<h2>Домашнее задание #1<h2>
<h3>Задание #1<h3>
<?php
$name = 'Дункан Маклауд';
$age = 400;
?>
<?php echo 'Меня зовут ' . $name . '.<br>'; ?>
<?php echo 'Мне ' . $age . ' лет.'; ?>
<br>
<?php echo "\"!|/'\"\\"; ?><br>

<h3>Задание #2<h3>
<?php
define (ALL, 80);
define (FLOMASTER, 23);
define (KARSNDASH, 40);
$kraska = ALL - FLOMASTER - KARSNDASH; 
echo $kraska;
?>
<br>
<h3>Задание #3<h3>
<?php
$age = 1000;

if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 1 && $age <= 17) {
    echo 'Вам ещё рано работать';
} elseif ($age < 1) {
    echo 'Неизвестный возраст';
}

?>


<br>
<h3>Задание #4<h3>

<?php

$day = 5;

switch ($day) {
    case 1:
        echo 'Это рабочий день';
        break;
    case 2:
        echo 'Это рабочий день';
        break;
    case 3:
        echo 'Это рабочий день';
        break;
    case 4:
        echo 'Это рабочий день';
        break;
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
        echo 'Это выходной день';
        break;
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день'; 
        break;
}
    echo '<br>' . $day;
?>
<br>
<h3>Задание #5<h3>

<?php
$bmw = [
    "name" => 'BMW',
    "model" => 'X5',
    "speed" => '120',
    "doors" => '5',
    "year" => '2015'
];

$toyota = [
    "name" => 'TOYOTA',
    "model" => 'TUNDRA',
    "speed" => '180',
    "doors" => '5',
    "year" => '2020'
];

$opel = [
    "name" => 'OPEL',
    "model" => 'VECTRA',
    "speed" => '150',
    "doors" => '3',
    "year" => '2000'
];

$all_cars = [$toyota, $bmw, $opel];

foreach ($all_cars as $a) {
    echo 'CAR ' . $a['name'] . '<br>';
    foreach ($a as $k) {
        echo $k .' ';
    }
    echo '<br>';
}

//echo '<pre>';
//print_r($all_cars);
//echo '</pre>';

?>

<br>
<h3>Задание #6<h3>
<?php
echo '<table>';
for ($i = 1; $i<=10; $i++) {
    if ($i % 2 != 0) {
    echo '<tr>';

        for ($s = $i; $s<=$i*10; $s=$s+$i) {
            if ($s % 2 != 0) {
                echo '<td>['. $s . ']</td>';
            } else {
                echo '<td>'. $s . '</td>';
            }

        }
    echo '</tr>';
    } else {
        echo '<tr>';
             $z = 0;
        for ($s = $i; $s<=$i*10; $s=$s+$i) {
                if ($z % 2 == 0) {
                    echo '<td>'. $s . '</td>';
                } else{
                    echo '<td>('. $s . ')</td>';
                }
                $z++;
        }

    echo '</tr>';
    }
} 
echo '</table>';
?>
<br>
<br>
<h2>Домашнее задание #2<h2>
<h3>Задание #1<h3>
<?php

require('../loft/functions.php');

$newarr = ['111111111','22222222','333333333'];
echo '<br>Три строки:';
echo task1($newarr);
echo '<br>Одной строкой:<br>';
echo task1($newarr, true);

?>
<br>
<h3>Задание #2<h3>

<?php

echo task2('*',6,3,5.3);


?>

<br>
<h3>Задание #3<h3>

<?php

echo task3(1,5);

?>
<br>
<h3>Задание #4<h3>
<?php

echo date('d.m.Y H:i', time()); 

?>
<br>
<h3>Задание #5<h3>
<?php
$str = 'Карл у Клары украл Кораллы';

echo str_replace('К', '', $str);

echo '<br>';

$str2 = 'Две бутылки лимонада';

echo str_replace('Две', 'Три', $str2);

?>

<br>
<h3>Задание #6<h3>

<?php
$filename = 'test.txt';
$texttofile = 'Hello again!';

$newfile = fopen($filename, 'w');

fwrite($newfile, $texttofile);
fclose($newfile);

function mysuperfile($newfile) {
    $content = file_get_contents($newfile);
    echo $content;
}

$file = '../loft/test.txt';

echo mysuperfile($file);

?>



