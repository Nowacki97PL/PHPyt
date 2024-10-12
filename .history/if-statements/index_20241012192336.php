<?php

$age = 1000;

if ($age >= 100){
    echo "You are too old to enter this site.";
}elseif($age == 0){
    echo "You were just born";
}elseif($age >= 18){
    echo ".";
}
else{
    echo "You must be 18+ to enter";
}