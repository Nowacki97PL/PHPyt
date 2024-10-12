<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="index.css"
        </head>

<body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <br>
        <label>y:</label>
        <input type="text" name="y">
        <br>
        <br>
        <input type="submit" value="total">
    </form>
</body>

</html>

<?php
    $x = $_POST['x'];
    $y = $_POST['y'];
    $total = null;

    $total = abs($x);
    $total2 = round($x);
    $total3 = floor($x);
    $total4 = ceil($x);
    $total5 = sqrt($x);
    $total6 = pow($x, $y);

    echo $total;
    echo $total2;
    echo $total3;
    echo $total4;
    echo $total5;
    // echo $total6;
?>