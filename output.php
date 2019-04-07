<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/php-lab-7/');
define('HTTP_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/php-lab-7/');
//echo SITE_ROOT;

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

?>

<?php require  SITE_ROOT . 'master-page/Header/header.php';?>

<!-- work_area для output'a -->

<?php


//Пока что путь будет эмулированным
//А по идеи здесь мы достаём то, что есть в post

if (isset($_POST['arr'])) {
    $arr = $_POST['arr'];
} else {
    echo 'Массив не был передан';
    goto stop_working_and_load_footer;
}
if (isset($_POST['arr'])) {
    $count = $_POST['count'];
} else {
    echo 'Параметр count не был передан';
    goto stop_working_and_load_footer;
}



//Валидируем массив из post
for ($i = 0; $i < $count; $i++) {
    if (!isset($arr[$i])) {
        echo "Элемент под индексом [" . $i . '] не найден. Заканчиваю работу';
        goto stop_working_and_load_footer;

    } elseif ($arr[$i] === '') {
        echo "Элемент под индексом [" . $i . '] является пустым. Заканчиваю работу';
        goto stop_working_and_load_footer;

    } elseif (!preg_match('~^\d+(?:$|[\.,]\d+$)~', trim($arr[$i],' '))) {
        echo 'Элемент "' . $arr[$i] . '\" под индексом [' . $i . '] не является числом. Заканчиваю работу';
        goto stop_working_and_load_footer;

    } else {
        continue;
    }
}


include_once 'util.php';

//Выбираем алгоритм

if (isset($_POST['algorithm'])) {
    $algorithm = $_POST['algorithm'];
} else {
    echo 'Алгоритм не найден';
    goto stop_working_and_load_footer;
}

//Нужно вывести его название. Hashmap сделаем потом. Пока что просто echo algorythm
echo '<h3>Обработка алгоритмом "' . $algorithm . '"</h3>';
printArray($arr, 'Начальный массив'); echo '<br>';



//Перед выполнением сортировки нужно сохранить текущее время.
$startTime = microtime(true);


//В каждом case'e цикл и в конце каждой итерации выводим текущее состояние массива.
switch ($algorithm) {
    case 'select':
        $iterationCount = selectSort($arr);
        break;
    case 'bubbles':
        $iterationCount = bubblesSort($arr);
        break;
    case 'embedded':
        break;
    default:
        break;
}
echo '<br>';

//Сохраняем время окончания сортировки
$endTime = microtime(true);
$endTimeSec = time();
//Вывести сообщение о завершении

echo 'Сортировка завершена.<br>';
printArray($arr, 'Итоговый массив');


//Вывести количество итераций

echo 'Количество итераций: ' . $iterationCount . '<br>';

//echo $startTime . '<br>';
//echo $endTime . '<br>';

//Вывести время, потраченное на сортировку по средствам вычисления разницы endTime и startTime
echo ('Алгоритм выполнялся ' . trim((string) round($endTime - $startTime,6), '0.') . ' микросекунд'); //не уверен, что это будет работать

?>



<?php
stop_working_and_load_footer:
require SITE_ROOT . 'master-page/Footer/footer.php';
?>

