<?php
    function tabuada($num){
        for ($i=0; $i <= 10; $i++) { 
            $multp = $i * $num;
            echo $num . "x" . $i . "=" . $multp . "<br>";
        }
    }
    tabuada(3);



?>