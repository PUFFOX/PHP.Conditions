<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Встановлюємо значення змінної
$number = -15;

// Перевіряємо, чи є число меншим за 0
if ($number < 0) {
    // Змінюємо знак числа
    $number = -$number;
}

// Виводимо результат на екран
echo "Результат: $number";
?>

</body>
</html>