

<?php
/*
Logical operators = combine conditional statements 

&& = True if both conditions are true
|| = True if at least one condition is true
! = True if False. False if True.
*/

$temp = 100;

if($temp >= 0 && $temp <= 30){
    echo"The weather is good";
}else{
    echo"The weather is bad";
}

if($temp < 0 || $temp > 30){
    echo"The weather is bad";
}else{
    echo"The weather is good";
}