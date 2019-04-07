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

    $iterationCount = 0;


    for ($i = 0; $i < count($arr); $i++) {

        $changeCount = 0;

        for ($j = 0; $j < count($arr) - 1; $j++) {

            if ($arr[$j] > $arr[$j + 1]) {
                $arr[$j] += $arr[$j + 1];
                $arr[$j + 1] = $arr[$j] - $arr[$j + 1];
                $arr[$j] = $arr[$j] - $arr[$j + 1];




                $changeCount += 1;
            }

            $iterationCount += 1;
            printArray($arr, 'Итерация ' . ($iterationCount));

        }

//        echo 'Кол-во изменений: ' . $changeCount . '<br>';

        if ($changeCount == 0) {
            break;
        }


    }

    return $iterationCount;
}

//Алгоритм Шелла
function shellSort(&$arr) {
    $size = count($arr);
    $d = floor($size / 2);

    $iterationCount = 0;

    while ($d > 0) {
        for ($i = 0; $i < $size - $d; $i++) {
            $j = $i;

            while (($j >= 0) && $arr[$j] > $arr[$j + $d]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + $d];
                $arr[$j + $d] = $temp;
                $j = $j - $d;

                $iterationCount += 1;
                printArray($arr, 'Итерация ' . $iterationCount);
            }
        }
        $d = floor($d / 2);
    }

    return $iterationCount;

}



//Алгоритм садового гнома

//Быстрая сортировка

//

