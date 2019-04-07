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
            echo  "]\n";
        }
    }
}

