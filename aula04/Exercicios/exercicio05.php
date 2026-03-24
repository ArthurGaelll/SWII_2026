<?php
    function mostrar_array($vetor){
        $soma = 0;
        foreach ($vetor as $valor) 
            $soma +=$valor;

        return $soma;
    }
    $numeros = [1,2,3,4,5];
    echo mostrar_array($numeros);



?>