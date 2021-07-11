<?php

//генерация двумерного массива 10 на 10 со случайными значениями
/* используется следующая система двухмерного массива каждая строка - массив */
function generateA()
{
    $a = [];
    for ($f = 0; $f < 10; $f++) {
        $c = [];
        for ($i = 0; $i < 10; $i++) {
            $c[] = rand(0, 100);
//            $c[] = $i; /* если нужны последовательные*/
        }
        $a[$f] = $c;
    }
    return $a;
}

$arrA = generateA();

//вывод 10 чисел в массив
function generateB()
{
    $b = [];
    for ($i = 0; $i < 10; $i++) {
        $b[] = rand(0, 10);
    }
    return $b;
}

$arrB = generateB();

//print_r(generateB());
//print_r(generateA());
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test data</title>
</head>
<style>
    table, th, td {
        width: 5px;
        border: 2px solid black;
    }
</style>
<body>
<h1>Teстовое задание php Junior-Bitrix</h1>
<div>
    <h1>Таблица массива"A" случайных чисел size 10*10</h1>
    <ul>
        <li>В данной таблице строка - подмассив(ибо в условии задачи ничего не сказано как должна быть структурирована
            таблица!)
        </li>
    </ul>
    <table>
        <?php
        for ($i = 0; $i < 10; $i++) {
//        foreach ($arrA as $key => $arr) {
            echo '<tr>';
            foreach ($arrA as $key => $arr) {
                echo '<td>' . $arr[$i] . '</td>';
            }
            echo '</tr>';
//        }
        }
        ?>
    </table>

    <h2>Таблица массива "B" 10 случайных чисел</h2>
    <table>
        <?php
        echo '<tr>';
        foreach ($arrB as $key => $arr) {
            echo '<th>' . $arr . '</td>';
        }
        echo '</tr>'; ?>
    </table>
</div>
<div>
    <h1>Результат после фильтрации в роли фильтра Массив В </h1>
    <p>"B" массив выделен <strong>жирным шрифтом</strong></p>
    <p>P.S В данном случае есть два варианта расположения массива В
        <em>Раскомментируйте второй вариант</em></p>
    <table>
        <?php
        /* Вариант 1 ,выполняю по условию задачи, но понятливость теряется*/
        echo '<tr>';
        foreach ($arrB as $key => $arr) {
            echo '<th>' . $arr . '</td>';
        }
        echo '</tr>';
        for ($i = 0; $i < 10; $i++) {
            echo '<tr>';
            /* Вариант 2 , понятливее стало ,но отход от условий*/
//            echo '<th>' . $arrB[$i] . '</th>';

            foreach ($arrA as $key => $arr) {
                if ($arr[$i] == $arrB[$i]) {
                    echo "<td> $arr[$i]</td>";
                } else {
                    echo "<td> НЕТ </td>";
                }
            }
            echo '</tr>';
        }
        ?>
    </table>
</div>

<script>

</script>
</body>
</html>