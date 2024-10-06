<?php
$name = "Michał";
$food = " Pizza";
$age = 21;
$quantity = 3;
$price = 4.99;
$online = true;
$total = null;

echo $name;

echo "<br>Hello {$name}";
echo "<br>You like {$food}";
echo "<br>You are $age years old";

echo "<br>online status: $online <br>";

echo "You ordered 3 x {$food}s";

$total = $quantity * $price;

echo "<br>Total cost: \${$total}<br>"; 

$x = 10;
$y = 2;
$z = null;

$z = $x + $y;
$z = $x * $y;
$z = $x - $y;
$z = $x / $y;
$z = $x ** $y;
$z = $x % $y;

echo $z;


?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="index.css"
        </head>

<body>
    <br>
    <button class="btn">Klik!</button>
</body>

</html>