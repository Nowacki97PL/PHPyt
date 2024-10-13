<?php

    // Switch - replacement to using many elseif statements more efficient, less code to write.

    // $grade = "A";

    // switch($grade){
    //     case "A":
    //         echo"You did great";
    //         break;
    //     case "B":
    //         echo"You did good";
    //         break;
    //     case "C":
    //         echo"You did okay";
    //         break;
    //     case "D":
    //         echo"You did poorly";
    //         break;
    //     case "F":
    //         echo"You failed";
    //         break;
    //     default:
    //     echo"{$grade} is not valid.";
    // }


    $date = date("l");
    echo"{$date}<br>";


    $date = "Monday";
    switch($date){
        case "Monday":
            echo"I hate Mondays";
            break;
        case "Tuesday":
            echo"It's Taco day";
            break;
        case "Wednesday":
            echo"";
            break;
        case "Thursday":
            echo"I hate Mondays";
            break;
        case "Friday":
            echo"I hate Mondays";
            break;
        case "Saturday":
            echo"I hate Mondays";
            break;
        case "Sunday":
            echo"I hate Mondays";
            break;
    }