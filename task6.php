<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аналіз дати</title>
</head>
<body>

<form method="post" action="">
    <label for="day">День:</label>
    <input type="number" id="day" name="day" min="1" max="31" required>
    <br>
    <label for="month">Місяць:</label>
    <input type="number" id="month" name="month" min="1" max="12" required>
    <br>
    <input type="submit" value="Визначити">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання значень з форми
    $day = intval($_POST['day']);
    $month = intval($_POST['month']);

    // Масив з назвами місяців
    $months = [
        1 => "Січень", 2 => "Лютий", 3 => "Березень", 4 => "Квітень",
        5 => "Травень", 6 => "Червень", 7 => "Липень", 8 => "Серпень",
        9 => "Вересень", 10 => "Жовтень", 11 => "Листопад", 12 => "Грудень"
    ];

    // Визначення пори року
    if ($month == 12 || $month == 1 || $month == 2) {
        $season = "Зима";
    } elseif ($month >= 3 && $month <= 5) {
        $season = "Весна";
    } elseif ($month >= 6 && $month <= 8) {
        $season = "Літо";
    } elseif ($month >= 9 && $month <= 11) {
        $season = "Осінь";
    }

    // Визначення половини місяця
    if ($day >= 1 && $day <= 15) {
        $halfOfMonth = "перша половина місяця";
    } elseif ($day >= 16 && $day <= 31) {
        $halfOfMonth = "друга половина місяця";
    } else {
        $halfOfMonth = "невірний день місяця";
    }

    // Виведення результатів
    if (isset($months[$month])) {
        echo "Місяць: " . $months[$month] . "<br>";
        echo "Пора року: " . $season . "<br>";
        echo "Це " . $halfOfMonth . "<br>";
    } else {
        echo "Невірний місяць.";
    }
}
?>

</body>
</html>
