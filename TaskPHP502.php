<?php

error_reporting(E_ALL);

function getArray($a_length, $cols)
{
    $array = null;
    $arrayForTable = null;

    if ($cols != 0) {
        $rows = ceil($a_length / $cols);
        for ($i = 0; $i < ($rows * $cols); $i++) {
            if ($i < $a_length) {
                $array[$i] = $i + 1;
            } else {
                $array[$i] = '';
            }
        }

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $index = $i + ($j * $rows);
                $arrayForTable[$i][$j] = $array[$index];
            }
        }
    }
    return $arrayForTable;
}

$array_length = isset($_GET['array_length']) ? (int)($_GET['array_length']) : '1';
$message = null;
$cols = isset($_GET['cols']) ? (int)($_GET['cols']) : '1';

if (isset($_GET['array_length']) && ($array_length < 1)) {
    $message = "Длина массива должна быть больше 0!!!";
} elseif ($cols <= 0) {
    $message = "Количество колонок должно быть больше 0!";
} else {
    if (isset($_GET['array_length']) && isset($_GET['cols'])) {
        $array = getArray($array_length, $cols);

        $rows = ceil($array_length / $cols);
        ?>
        <html>
        <body>
        <table width="60%" border="1">
            <?php
            for ($i = 0; $i < $rows; $i++) {
                echo '<tr>';
                for ($j = 0; $j < $cols; $j++) {
                    ?>
                    <td><?= $array[$i][$j] ?></td>
                <?php }
                echo '</tr>';
            }
            ?>
        </table>
 <?php
    }
}
 ?>
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
