<?php
// trabalhos com arrays
    function mostrar_array($vetor){
         foreach ($vetor as $valor)  
            echo $valor ."<br>";
    }

    function mostra_um($vetor2,$pos){
        echo $vetor2[$pos];
    }

    $numeros = [1,2,3,4,5];
    $nome = ['fulano','beltrano','ciclano'];

    mostrar_array($numeros);
    mostrar_array($nome);

    mostra_um($nome,0);

    
?>