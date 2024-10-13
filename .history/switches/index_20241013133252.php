<?php

    // Switch - replacement to using many elseif statements more efficient, less code to write.

    $grade = "A";

    switch($grade){
        case "A":
            echo"You did great";
            
        case "B":
            echo"You did good";
        case "C":
            echo"You did okay";
    }