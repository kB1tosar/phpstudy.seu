<?php
    $array = [];
    for ( $i=0; $i<1000; $i++ ){
        $array[$i] = rand();
    }
    $array [5] = $_GET['number'];
    sort ($array);
    $j = 0;
    foreach( $array as $value ) {
        $j++;
        if ($value == $_GET['number']) {
            echo 'Порядковый номер искомого числа:' . $j;
        }
    }
    include ('ad.html');
?>


<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Найдено</title>
</head>
<body>
    <hr>
    <a href="/index.php">Назад</a>
</body>-->
