

<?php
/*
Logical operators = combine conditional statements 

&& = True if both conditions are true
|| = True if at least one condition is true
! = True if False. False if True.
*/

$temp = 100;
$temp2 = 15;

if($temp >= 0 && $temp <= 30){
    echo"The weather is good";
}else{
    echo"The weather is bad";
}

if($temp2 < 0 || $temp2 > 30){
    echo"<br>The weather is bad";
}else{
    echo"<br>The weather is good";
}

$age = 25;
$citizen = true;

if($age >= 18 && $citizen)