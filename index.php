<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/php-lab-7/');
define('HTTP_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/php-lab-7/');
//echo SITE_ROOT;

?>

<?php require SITE_ROOT . 'master-page/Header/header.php'; ?>

<!--Путь work-area будет здесь-->

<form action="output.php" method="post" target="_blank" id="arr-form">

    <input type="hidden" name="count" value="1">

    <h3>Ввод элементов массива</h3>

    <div><input type="button" value="Добавить элемент" class="add-element-button"></div>

    <table id="arr-items-input-view">
        <tr class="arr-item">
            <td class="arr-item__index">[0]</td>
            <td><input type="text" name="arr[0]" class="arr-item__input"></td>
        </tr>
    </table>

    <div>
        <select name="algorithm">
            <option value="select">Сортировка выбором</option>
            <option value="bubbles">Пузырьковый алгоритм</option>
            <option value="shell">Алгоритм Шелла</option>
            <option value="gnome">Алгоритм садового гнома</option>
            <option value="quick">Быстрая сортировка</option>
            <option value="embedded">Встроенная сортировка PHP</option>
        </select>
    </div>

    <div id="form-bottom-controls">
        <input type="button" value="Добавить элемент" class="add-element-button">
        <input type="submit">
    </div>

</form>


<?php require SITE_ROOT . 'master-page/Footer/footer.php' ?>

