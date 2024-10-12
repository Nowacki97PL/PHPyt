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

echo "<br>";

$counter = 0;

$counter--;

echo $counter;

/*
()
**
* / %
+-
 */

$total = 1 + 2 - 3 * 4 / 5 ** 6;
echo "<br> {$total}";

echo "<br>";

echo $_POST["username"] . "<br>";
echo "{$_POST["password"]} <br>";
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
    <br>
    <button class="btn">Klik!</button>
    <br>
    <br>

    <form action="index.php" method="post">
        <label>username:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>

    <form action="index.php" method="post"
</body>

</html>