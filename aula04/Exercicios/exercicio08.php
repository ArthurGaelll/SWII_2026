<?php
// trabalhos com arrays
    function mostrar_array(){
        $vetor = [];
        for ($i=0; $i < 10; $i++) { 
            $sorteio = rand(1,10);
            $vetor[$i] = $sorteio;
        }

        foreach ($vetor as $valor) {
            echo"$valor <br>";
        }
            
    }
    mostrar_array();

    
?>