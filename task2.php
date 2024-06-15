<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Встановлюємо значення двох чисел
$number1 = 10;
$number2 = 20;

// Перевіряємо, яке число більше
if ($number1 > $number2) {
    echo "Більше число: $number1";
} elseif ($number1 < $number2) {
    echo "Більше число: $number2";
} else {
    echo "Числа рівні: $number1 і $number2";
}
?>

</body>
</html>