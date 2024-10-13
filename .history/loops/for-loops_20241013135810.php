<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for-loops.php" method="post"></form>
</body>
</html>
<?php
    for($i = 0; $i <= 100; $i+=20){
        echo $i . "<br>";
    }

    for($i = 100; $i >= 0; $i-=20){
        echo $i . "<br>";
    }