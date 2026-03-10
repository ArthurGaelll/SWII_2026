<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber Dados</title>
</head>
<body>
    
    <?php
        //$nome = $_POST ["nome"];
        //htmlspecialchars proteje contra a ejeção de código html pelo input
        $nome = htmlspecialchars($_POST ["nome"]);
        $email = $_POST ["email"];
        $idade = $_POST ["idade"];

        $ano_atual = date('Y');
        echo $ano_atual;

        $anos = $ano_atual - $idade;
        
    ?>

    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>A idade é: <?php echo $idade; ?></p>

    <p>Você nasceu em: <?php echo $anos ?></p>

    
        <?php 
        if ($idade <= 18) {
            echo "<p style='color: red'> Você é menor de idade  </p>";
        } else {
            echo "<p style='color: green'> Você é maior de idade  </p>";
        }
        ?>
    




</body>
</html>

