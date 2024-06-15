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
$headingNumber = 3; // змініть значення на будь-яке число для тестування

// Перевіряємо, чи входить число в діапазон від 1 до 6
if ($headingNumber >= 1 && $headingNumber <= 6) {
    // Якщо число входить в діапазон, будуємо відповідний тег заголовка
    echo "<h$headingNumber>Це заголовок h$headingNumber</h$headingNumber>";
} else {
    // Якщо число не входить в діапазон, виводимо повідомлення про помилку
    echo "Помилка: Число $headingNumber не входить в діапазон від 1 до 6.";
}
?>

</body>
</html>