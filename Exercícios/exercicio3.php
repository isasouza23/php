<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 Isabelle</title>
</head>
<body>

    <h1>Números inteiros e soma</h1>
    <?php
        echo 15;
        echo " | Valores inteiros. <br>";
        echo 8 + 2;
        echo " | Soma de inteiros. <br>";
        echo 7 - 12;
        echo " | Soma com negativo. <br>";
    ?>
    <br><hr>
    <h2> verificação Números com float</h2>
    <?php
        
        $a = 7.12;
        echo $a;
        echo "<br>";

        echo 3.105;
        echo "<br>";
    ?>

    <?php
        $a = "teste";
        $b = 4.12;

        if(is_float($a)) {
            echo "É float 1! <br>";
        }
        if(is_float($b)) {
            echo "É float 2! <br>";
        }
    ?>

    <br><hr>
    <h1>Textos</h1>

    <?php

        echo "Texto de aspas duplas <br>";
        echo "Texto de aspas simples <br>";
        echo "Eu disse: 'Boa tarde!' <br>";
        echo "Ele disse: 'Tudo bem?' <br>";
    
    ?>

    <h1>String</h1>

    <?php

        $str = "Morango.";
        $num = 120;

        if(is_string($str)) {
            echo "$str é uma string 1 <br>";
        }

        if(is_string($num)) {
            echo "$num é uma string 2 <br>";
        }

        if(is_string("asd")) {
            echo "É uma string 3 <br>";
        }

    ?>

    <br><hr>
    <h1>Booleano</h1>

    <?php

        $a = true;

        if(is_bool($a)) {
            echo "É um booleano 4  <br>";
        }

    ?>

    <h1>Verificação Booleano</h1>

    <?php

        $a = true;

        if(is_bool($a)) {
            echo "É um booleano 10 <br>";
        }

        if(is_bool(0)) {
            echo "É um booleano 21 <br>";
        }

        if(is_bool(false)) {
            echo "É um booleano 2 <br>";
        }
        if(is_bool(0.0 == false)) {
            echo "0 é considerado falso! <br>";
        }

    ?>
    <br><hr>
    <h1>Array</h1>

    <?php
        $a = array (5, 3, 4, 10);

        print_r($a);
        echo "<br>";

        echo "<p>O primeiro valor da lista é: $a[0]</p>";

    ?>

    <?php

        $arr = ["Enem", 108, true];

        echo "<br>";
        print_r($arr);
        echo "<br>";
        print_r($arr[1]);
        echo "<br><p>O Segundo valor da lista é: $arr[1]</p>";

    ?>
</body>
</html>