<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Встановлюємо значення змінних
$number = 25; // число, яке потрібно перевірити
$A = 10; // нижня межа проміжку
$B = 20; // верхня межа проміжку

// Перевіряємо, чи лежить число у проміжку від A до B
if ($number >= $A && $number <= $B) {
    // Якщо число лежить у проміжку, виводимо його квадрат
    $square = $number * $number;
    echo "Квадрат числа $number: $square";
} elseif ($number > $B) {
    // Якщо число більше від максимального, виводимо відповідне повідомлення
    $N = $number - $B;
    echo "Число більше від максимального на $N";
} else {
    // Якщо число менше від мінімального, виводимо відповідне повідомлення
    $N = $A - $number;
    echo "Число менше від мінімального на $N";
}
?>

</body>
</html>