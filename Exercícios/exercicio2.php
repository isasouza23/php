<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>

    <!-- CSS Interno -->
    <style>
        .destaque {color: pink;}
        .pri2 {color: violet;}
    </style>
</head>
<body>
    <h1 class="destaque">Você é sua própria luz.</h1>
    <p class="pri2">Programadora: Isabelle</p>
    <hr>

    <?php
    //Geraçãode texto (string)
    echo "Chama Sesi-Senai !";

    /* Geração de texto estruturado (com tags, atributos) */
    echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP.</h2>";
    echo "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP. </h2>";

    ?>

    <h1>HTML e PHP mesclados</h1>
    <p class="pri2">Trabalhando com PHP e HTML</p>

    <?php
        $linguagem = "Linguagem PHP.";
    ?>
    <p class="pri2">Você é mais forte do que pensa! <?=$linguagem?> </p>
    

</body>
</html>