<?php

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif($hours <=40)