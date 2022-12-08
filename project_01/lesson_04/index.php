<?php

$title = 'Урок 4. Переменные';
$winnie_the_pooh = 'Hello I am Winnie';
$fruit = 'orange';

$var = 'Test1';
$Var = 'Test2';

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title?></title>
</head>
<body>

<h1><?php echo $title?></h1>

<?php
$title = 'Урок 4';
$winnie_the_pooh = "Hello I am Winnie. I have 2 {$fruit}s";
?>
<h1><?php echo $title ?></h1>

<p><?php echo $winnie_the_pooh ?></p>

<p><?php echo $winnie_the_pooh?></p>

<?php

var_dump($var);
var_dump($Var);

?>

</body>
</html>