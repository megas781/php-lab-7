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

            $count += 1;
            printArray($arr, 'Итерация ' . ($count));
        }
        $arr[$currentMinValueIndex] = $arr[$i];
        $arr[$i] = $currentMinValue;


    }

    return $count;
}

//Пузырьковая сортировка

function bubblesSort(&$arr) {

    $count = 0;


    for ($i = 0; $i < count($arr); $i++) {

        $changeCount = 0;

        for ($j = 0; $j < count($arr) - 1; $j++) {

            if ($arr[$j] > $arr[$j + 1]) {
                $arr[$j] += $arr[$j + 1];
                $arr[$j + 1] = $arr[$j] - $arr[$j + 1];
                $arr[$j] = $arr[$j] - $arr[$j + 1];




                $changeCount += 1;
            }

            $count += 1;
            printArray($arr, 'Итерация ' . ($count));

        }

//        echo 'Кол-во изменений: ' . $changeCount . '<br>';

        if ($changeCount == 0) {
            break;
        }


    }

    return $count;
}

//Алгоритм Шелла



//Алгоритм садового гнома

//Быстрая сортировка

//

