<?php
    $textp = $_POST["textp"];
    $textl = $_POST["textl"];
    $qtdp = $_POST["qtdp"];
    $qtdl = $_POST["qtdl"];

    if ($qtdp < 1 || $qtdp > 20) {
        echo "Erro: Quantidade de Paragrafos Inválida, aceitamos no mínimo 1 paragrafo e no máximo 20";
        exit;
    }

    if ($qtdl < 1 || $qtdl > 50) {
        echo "Erro: Quantidade de itens da lista Inválida, aceitamos no mínimo 1 lista e no máximo 50";
        exit;
    }

    if ($qtdp > 10){
        echo "Muitos paragrafos! <br>";
    }

    if ($qtdl > 30){
        echo "Lista extensa! <br>";
    }

    echo "<hr>";



    for ($i=1; $i <= $qtdp; $i++) { 
        echo "<p> Paragrafo $i: $textp </p>";
    }

    echo "<hr>";

    echo "<ul>";
    for ($i=1; $i <= $qtdl; $i++) { 
        echo "<li> Item $i: $textl </li>";
    }
    echo "</ul>";

?>