<?php
// Função com parametro e sem retorno
    function calcula_quadrada($a){
       $x = $a * $a;

       echo "$x <br>";
    }

    calcula_quadrada(1);
    calcula_quadrada(2);
    calcula_quadrada(3);
    calcula_quadrada(4);

    echo "<hr>";

    function soma ($x,$y){
        $soma = $x + $y;

        echo "A soma é: $soma <br>";
    }

    $n1 = 5;
    $n2 = 8;

    soma($n1,$n2);
?>