<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 1</title>
</head>
<body>



<?php

echo '<h1>Числа, переменные, операторы, функции, строки, типы данных и вывод результатов</h1>>';

$value1 = 100;
$value2 = 2.5;

$value3 = 45 + 15;
echo $value3;

$result1 = $value1 * $value2 - $value3;
echo $result1;

$result2 = 7 / 3;
echo $result2;

// слишком длинное, на наш взгляд... Давайте сократим его до второго знака после запятой, для чего вызовем
// функцию round. Тут же видим, что переменная $result2 переписывается с новями параметрами
$result2 = round($result2, 2);



?>

</body>
</html>