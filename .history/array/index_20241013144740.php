<?php

$foods = array("apple", "orange", "banana", "coconut", "peach");

array_push($foods, "pineapple", "kiwi");
array_pop($foods);

foreach($foods as $food){
    echo $food . "<br>";
}




