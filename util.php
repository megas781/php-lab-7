<?php

//Pretty вывод массива
function printArray($arr, $message = '') {
    echo $message . ': ';
    echo '[';
    for ($i = 0; $i < count($arr); $i++) {

        echo $arr[$i];

        if ($i < count($arr) - 1) {

            echo ', ';

        } else {
            echo  "]<br>";
        }
    }
}

//Сортировка выбором
function selectSort(&$arr) {

    $count = 0;

    for ($i = 0; $i < count($arr) - 1; $i++) {

        $currentMinValue = $arr[$i];
        $currentMinValueIndex = $i;

        for ($j = $i + 1; $j < count($arr); $j++) {

            if ($arr[$j] < $currentMinValue) {

                $currentMinValue = $arr[$j];
                $currentMinValueIndex = $j;

            }

        }
        $arr[$currentMinValueIndex] = $arr[$i];
        $arr[$i] = $currentMinValue;

        $count += 1;
        printArray($arr, 'Итерация ' . ($i + 1));
    }

    return $count;
}

//Пузырьковая сортировка

//Алгоритм Шелла

//Алгоритм садового гнома

//Быстрая сортировка

//

