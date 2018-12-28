<?php

$a = isset($_GET['a']) ? ($_GET['a']) : '';
$b = isset($_GET['b']) ? ($_GET['b']) : '';
$operation = isset($_GET['operation']) ? ($_GET['operation']) : '';

if (is_numeric($a) && is_numeric($b)) {
switch ($operation) {
    case '+':
        $result = $a + $b;
        echo "$a + $b = $result";
        break;
    case '-':
        $result = $a - $b;
        echo "$a - $b = $result";
        break;
    case '*':
        $result = $a * $b;
          echo "$a * $b = $result";
        break;
    case '/':
        if ($b <> 0) {
            $result = $a / $b;
            echo "$a / $b = $result";
        } else {
            echo 'Ошибка!Деление на 0!';
        }
        break;
}
} else {
    echo "Вводимые данные должны иметь числовое значение!";
}
?>
<html>
<body>
<form action="TaskPHP202.php" method="get">
    <table>
        <tr>
            <td>Введите первое число:</td>
            <td><input type="text" name="a" value="<?= $a ?>"></td>
        </tr>
        <?php $checked="checked=\"checked\"";?>
        <tr>
            <td>Выберите знак оператора:</td>
            <td>
                <label>
                    •<input type="radio" <?php if(isset($_GET['operation'])){ if ($_GET['operation']=="+") {echo $checked;}};?> value="+" name="operation"> +
                </label><br/>
                <label>
                    •<input type="radio"<?php if(isset($_GET['operation'])){ if ($_GET['operation']=="-") {echo $checked;}};?> value="-" name="operation"> -
                </label><br/>
                <label>
                    •<input type="radio"<?php if(isset($_GET['operation'])) { if ($_GET['operation']=="*") {echo $checked;}};?> value="*" name="operation"> *
                </label><br/>
                <label>
                    •<input type="radio"<?php if(isset($_GET['operation'])) { if ($_GET['operation']=="/") {echo $checked;}};?>value="/" name="operation"> /
                </label>
                <?php ; ?>
            </td>
        </tr>
        <br/>
        <tr>
            <td>Введите второе число:</td>
            <td><input type="text" name="b" value="<?= $b ?>"></td>
        </tr>
        <tr>
            <td>Для вывода результата нажмите эту кнопку</td>
            <td><input type="submit" value="  =  "></td>
        </tr>
    </table>
</form>
</body>
</html>





