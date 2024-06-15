<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конвертер одиниць пам'яті</title>
</head>
<body>

<form method="post" action="">
    <label for="input_number">Число:</label>
    <input type="number" id="input_number" name="input_number" required>
    <br>
    <label for="from">З:</label>
    <select id="from" name="from" required>
        <option value="bytes">Байти</option>
        <option value="kilobytes">Кілобайти</option>
        <option value="megabytes">Мегабайти</option>
        <option value="gigabytes">Гігабайти</option>
    </select>
    <br>
    <label for="to">У:</label>
    <select id="to" name="to" required>
        <option value="bytes">Байти</option>
        <option value="kilobytes">Кілобайти</option>
        <option value="megabytes">Мегабайти</option>
        <option value="gigabytes">Гігабайти</option>
    </select>
    <br>
    <input type="submit" value="Конвертувати">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних з форми
    $input_number = floatval($_POST['input_number']);
    $from = $_POST['from'];
    $to = $_POST['to'];

    // Виконання конвертації
    $result = convertMemory($input_number, $from, $to);

    // Виведення результату
    echo "<p>$input_number $from = $result $to</p>";
}

function convertMemory($input_number, $from, $to) {
    // Коефіцієнти конвертації (для спрощення, можна використовувати сталі значення)
    $coefficients = [
        'bytes' => 1,
        'kilobytes' => 1024,
        'megabytes' => 1024 * 1024,
        'gigabytes' => 1024 * 1024 * 1024
    ];

    // Конвертація
    $converted_value = $input_number * ($coefficients[$from] / $coefficients[$to]);

    // Повернення результату з округленням до двох знаків після коми
    return round($converted_value, 2);
}
?>

</body>
</html>
