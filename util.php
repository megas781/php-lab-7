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

    $size = count($arr);

    if ($size == 1) {
        return 0;
    }

    $count = 0;

    for ($i = 0; $i < $size - 1; $i++) {

        $currentMinValue = $arr[$i];
        $currentMinValueIndex = $i;

        for ($j = $i + 1; $j < $size; $j++) {

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

    $size = count($arr);

    if ($size == 1) {
        return 0;
    }

    $iterationCount = 0;


    for ($i = 0; $i < $size; $i++) {

        $changeCount = 0;

        for ($j = 0; $j < $size - 1; $j++) {

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

    if ($size == 1) {
        return 0;
    }

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
function gnomeSort(&$arr) {

    $size = count($arr);

    if ($size == 1) {
        return 0;
    }

    $i = 0;
    $iterationCount = 0;

    while ($i < $size - 1) {

        if ($arr[$i] > $arr[$i + 1]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$i + 1];
            $arr[$i + 1] = $temp;
            if ($i > 0) {
                $i--;
            }
        } else {
            $i++;
        }

        $iterationCount += 1;
        printArray($arr, 'Итерация ' . $iterationCount);
    }

    return $iterationCount;
}


//Быстрая сортировка



function quickSort(&$arr) {

    $iterationCount = 0;

    function partition(&$arr, $start, $end, &$iterationCount) {
        $marker = $start;

        for ($i = $start; $i <= $end ; $i++) {

            if ($arr[$i] <= $arr[$end]) {
                $temp = $arr[$marker];
                $arr[$marker] = $arr[$i];
                $arr[$i] = $temp;
                $marker += 1;
            }

            $iterationCount += 1;
            printArray($arr, 'Итерация ' . $iterationCount);

        }
        return $marker - 1;
    }



    function innerQuickSort(&$arr, $start, $end, &$iterationCount) {
        if ($start >= $end) {
            return;
        } else {
            $pivot = partition($arr, $start, $end, $iterationCount);
            innerQuickSort($arr, $start, $pivot - 1, $iterationCount);
            innerQuickSort($arr, $pivot + 1, $end, $iterationCount);
        }
    }

    innerQuickSort($arr,0,count($arr) - 1, $iterationCount);

    return $iterationCount;

}

//

