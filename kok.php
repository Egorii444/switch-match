<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<h2>Калькулятор</h2>
<form method="post">
    <label>Введите первое число:</label><br>
    <input type="text" name="num1"><br><br>
    <label>Введите второе число:</label><br>
    <input type="text" name="num2"><br><br>
    <label>Выберите операцию:</label><br>
    <select name="operator">
        <option value="+">Сложение (+)</option>
        <option value="-">Вычитание (-)</option>
        <option value="*">Умножение (*)</option>
        <option value="/">Деление (/)</option>
    </select><br><br>
    <input type="submit" value="Выполнить">
</form>

<?php
// Проверяем, были ли отправлены два числа и оператор из формы
if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
    // Получаем два числа и оператор из формы
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $operator = $_POST['operator'];

    // Выполняем операцию в зависимости от выбранного оператора
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            echo "<p>Результат сложения: $result</p>";
            break;
        case '-':
            $result = $num1 - $num2;
            echo "<p>Результат вычитания: $result</p>";
            break;
        case '*':
            $result = $num1 * $num2;
            echo "<p>Результат умножения: $result</p>";
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "<p>Результат деления: $result</p>";
            } else {
                echo "<p>Ошибка: деление на ноль!</p>";
            }
            break;
        default:
            echo "<p>Неверный оператор!</p>";
    }
}
?>
</body>
</html>