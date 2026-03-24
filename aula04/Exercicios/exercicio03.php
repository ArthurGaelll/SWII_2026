<?php
    function impopar ($num){
        $verificar = $num % 2;
        if ($verificar == 0) {
            echo "o numero é par";
        } else {
            echo "o numero é impar";
        }
    }


    impopar(3);



?>