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

    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <input type="submit" value="total">
    </form>
</body>

</html>

<?php

?>