<?php

    function greeting($name = "имя", $weekday = 0) {

    switch ($weekday <= 5) {
            
        case true:
            
            echo "Привет, $name! Хорошего и продуктивного рабочего дня!";
            break;
            
        default:
            
            echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
            break; 
        }
    }

    greeting("Александр", 1);

?>