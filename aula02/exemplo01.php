<?php
    $a = 10;
    $b = 5;

    $soma = $a + $b;

    echo "<strong> Exemplo 1 <strong/><br>";
    echo "A soma é: $soma";
    echo "<hr>";


    // ESTRUTURAS CONDICIONAIS
    // IF

    echo "<strong> Exemplo 2 <strong/><br>";
    $n1 = 4;
    $n2 = 5;
    $n3 = 6;

    $media = ($n1 + $n2 + $n3) / 3;
    echo "Sua média é: $media <br>";

    if ($media > 5) {
        echo "Aprovado";
    } elseif ($media < 4) {
        echo "REPROVADO";
    } else {
        echo "RECUPERAÇÂO";
    }

    echo "<hr>";
     // ESTRUTURAS REPETIÇÃO
    // Switch case

    echo "<strong> Exemplo 3 <strong/><br>";
    $dia = 2;

    switch ($dia) {
        case 1:
        echo "DOMINGO";
            break;
        
        case 2:
        echo "SEGUNDA";
            break;
        
        case 3:
        echo "TERÇA";
            break;
        
        case 4:
        echo "QUARTA";
            break;
        
        case 5:
        echo "QUINTA";
            break;
        
        case 6:
        echo "SEXTA";
            break;

        case 7:
        echo "SÁBADO";
            break;
        
        default:
            echo "Numero inválido";
            break;
        
    }
    echo "<hr>";

    // FOR
    echo "<strong> Exemplo 4 <strong/><br>";

    for ($i=0; $i < 10 ; $i++) { 
        echo "$i - ";
    }

    echo "<hr>";

    //WHILE
    echo "<strong> Exemplo 5 <strong/><br>";

    $a = 0;
    while ($a <= 10) {
        echo "$a - ";
        $a++;
    }
    echo "<hr>";

    // DO WHILE
    echo "<strong> Exemplo 6 <strong/><br>";
    $x = 1;
    do {
        echo"$x - ";
        $x++;
    } while ($x <= 10);
    echo "<hr>";

    echo "<strong> Exemplo 6 <strong/><br>";
    // FOREACH

    $nomes = ['Fulano', 'Beltrano', 'Ciclcando', 'Anderson'];
    // echo $nomes;
    // $qtd = count($nomes);

    // // echo $nomes[0];
    // // echo "<br>";
    // // echo $nomes[1];
    // // echo "<br>";
    // // echo $nomes[2];
    // // echo "<br>";

    // for ($n = 0; $n <= $qtd-1 ; $n++) { 
    //     echo $nomes[$n] . "<br>";
    // }

    foreach ($nomes as $nome) {
        echo "$nome <br>";
    }
?>