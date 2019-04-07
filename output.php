<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/php-lab-7/');
define('HTTP_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/php-lab-7/');
//echo SITE_ROOT;

echo '<pre>';
print_r($_POST);
echo '</pre>';

?>

<?php require  SITE_ROOT . 'master-page/Header/header.php';?>

<!-- work_area для output'a -->

<?php


//Пока что путь будет эмулированным
//А по идеи здесь мы достаём то, что есть в post
$arr = $_POST['arr'];
$count = $_POST['count'];


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

//if (empty($arr)) {
//    echo 'Ошибка: введён пустой массив';
//    die();
//} elseif (false) {
//    echo 'Ошибка: в массиве есть нечисловые значения';
//    die();
//} else {
//    echo 'Валидация данных прошла успешно!<br>';
//}


//Выбираем алгоритм
$algorythm = 'newAlgo';
//Нужно вывести его название. Hashmap сделаем потом. Пока что просто echo algorythm
echo 'Название алгоритма: ' . $algorythm . '<br>';
echo 'Входные данные:<br>';
echo '<pre>';
print_r($arr);
echo '</pre>';





/*
 * Здесь мы знаем, что массив валидный. Пора начать обрабатывать через switch.
 * Но перед выполнением сортировки нужно сохранить текущее время.
 */
$startTime = microtime(true);


//В каждом case'e цикл и в конце каждой итерации выводим текущее состояние массива.
switch ($algorythm) {
    case '':
        break;
    default:
        break;
}

//Сохраняем время окончания сортировки
$endTime = microtime(true);

//Вывести сообщение о завершении

//Вывести количество итераций

//Вывести время, потраченное на сортировку по средствам вычисления разницы endTime и startTime
print_r(round($endTime - $startTime, 6)); //не уверен, что это будет работать
?>



<?php
stop_working_and_load_footer:
require SITE_ROOT . 'master-page/Footer/footer.php';
?>

