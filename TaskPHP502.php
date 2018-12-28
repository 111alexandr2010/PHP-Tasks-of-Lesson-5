<?php

require_once __DIR__ . '/functions502.php';

error_reporting(E_ALL);

$array_length = isset($_GET['array_length']) ? (int)($_GET['array_length']) : '1';
$message = null;
$cols = isset($_GET['cols']) ? (int)($_GET['cols']) : '1';

if (isset($_GET['array_length']) && ($array_length < 1)) {
    $message = "Длина массива должна быть больше 0!!!";
} elseif ($cols <= 0) {
    $message = "Количество колонок должно быть больше 0!";
} else {
    $array = get_array($array_length, $cols);

    if (isset($_GET['array_length']) && isset($_GET['cols'])) {
        get_table($array, $cols);
    }
}
?>

<html>
<body>
<form action="TaskPHP502.php" method="get">
    <table>
        <tr>
            <td>Введите длину массива:</td>
            <td><input type="text" name="array_length" value="<?= $array_length ?>"></td>
        </tr>
        <tr>
            <td>Введите количество колонок:</td>
            <td><input type="text" name="cols" value="<?= $cols ?>"></td>
        </tr>
        <?= $message; ?>
        <tr>
            <td>Для вывода таблицы нажмите эту кнопку</td>
            <td><input type="submit" value="  OK  "></td>
        </tr>
    </table>
</form>
</body>
</html>
