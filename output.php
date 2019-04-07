<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/php-lab-7/');
define('HTTP_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/php-lab-7/')
//echo SITE_ROOT;

?>

<?php require  SITE_ROOT . 'master-page/Header/header.php';?>

<!-- work_area для output'a -->

<?php



//Пока что путь будет эмулированным
//А по идеи здесь мы достаём то, что есть в post
$arr = [4,7,3,5,4];

//Выбираем алгоритм
$algorythm = 'newAlgo';
//Нужно вывести его название. Hashmap сделаем потом. Пока что просто echo algorythm
echo 'Название алгоритма: ' . $algorythm . '<br>';
echo 'Входные данные:<br>';
echo '<pre>';
print_r($arr);
echo '</pre>';

//Валидируем массив из post
if (false) {
    echo 'Ошибка: введён пустой массив';
    die();
} elseif (false) {
    echo 'Ошибка: в массиве есть нечисловые значения';
    die();
} else {
    echo 'Валидация данных прошла успешно!<br>';
}



/*
 * Здесь мы знаем, что массив валидный. Пора начать обрабатывать через switch.
 * Но перед выполнением сортировки нужно сохранить текущее время.
 */
$startTime = time();


//В каждом case'e цикл и в конце каждой итерации выводим текущее состояние массива.
switch ($algorythm) {
    case '':
        break;
    default:
        break;
}

//Сохраняем время окончания сортировки
$endTime = time();

//Вывести сообщение о завершении

//Вывести количество итераций

//Вывести время, потраченное на сортировку по средствам вычисления разницы endTime и startTime
print_r($endTime - $startTime); //не уверен, что это будет работать
?>



<?php require SITE_ROOT . 'master-page/Footer/footer.php' ?>

