<?php
function get_array($a_length, $cols)
{
    $array = null;
    if ($cols != 0) {
        $rows = ceil($a_length / $cols);
        for ($i = 0; $i < ($rows * $cols); $i++) {
            if ($i < $a_length) {
                $array[$i] = $i + 1;
            } else {
                $array[$i] = '';
            }
        }
    }
    return $array;
}

function get_table($array, $cols)
{
    $rows = ceil(count($array) / $cols);
    ?>
    <html>
    <body>
    <form method="get" action="/TaskPHP502.php">
        <table width="60%" border="1">
            <?php
            for ($i = 0; $i < $rows; $i++) {
                echo '<tr>';
                for ($j = 0; $j < $cols; $j++) {
                    $index = $i + ($j * $rows); ?>
                    <td><?= $array[$index] ?></td>
                <?php }
                echo '</tr>';
            }
            ?>
        </table>
    </form>
    </body>
    </html>
    <?php
}
?>