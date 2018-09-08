<?php

    function greeting($name = "имя", $weekday = 0) {

        if ($weekday <= 5) {
            echo "Привет, $name! Хорошего и продуктивного рабочего дня!";
        } else {
            switch($weekday){
                case 6; case 7;
                    echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
                    break;
                    
                default:
                    echo "Привет $name! Введите правильное значение!";
                    break;     
            }
        }
            
    }

    greeting("Александр", 1);
?>