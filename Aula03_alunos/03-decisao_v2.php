<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Condicionais PHP</title>
</head>
<body>
    <h1 class="destaqueP">Estruturas de Controle Condicional</h1>
    <hr>
<!-- _________________________________________________________________ -->
    <h2 class="destaque">SE Simples</h2>


<!-- 1ª Digitação (Aqui) -->

<?php
    $numero = 5;
    if($numero >1) {
?>
    <p><?numero?> é maior que 1</p>
<?php
}
?>

<hr>
<!-- _________________________________________________________________ -->
    <h2 class="destaque">SE Composta</h2>

<?php
    $produto = "Iphone 15 Pro Max";
    $qtdEmEstoque = 0; 
    $qtdCritica = 14; 
?>

    <h3><?=$produto?></h3>


<!-- 2ª Digitação (Aqui) -->
<?php
if($qtdEmEstoque < $qtdCritica) {
?>
    <p class="repor">É necessário compra</p>

<?php
if($qtdEmEstoque === 0) {
    
?>
    <p><mark><b>Urgente!</b></mark></p>
   <?php
   }
}
    else{
?>
    <p class="ok">Estoque OK!</p>
<?php
    }
?>
<hr>
<!-- _________________________________________________________________ -->
    <h2 class="destaque">Encadeada</h2>

     <!-- Cardápio digital
    1 -> Pastel
    2 -> Pizza
    3 -> Esfiha
    x -> Opção inválida  -->
<?php
    $opcao = 1; 

    if($opcao === 1) { 
?>
        <p>Pastel</p>
<?php
    } elseif($opcao === 2) {
?>
        <p>Pizza</p>
<?php
    } elseif($opcao === 3) {
?>
        <p>Esfiha</p>
<?php
    } else {
?>
        <p>Opção inválida!</p>
<?php
    } 
/*_________________________________________________________________ */
    // Refatorada (Melhorada)
    $opcao = 3; // comece com qualquer valor


    //  3ª Digitação (Aqui) 
    if($opcao === 1) { 
        $opcaoEscolhida ="Pastel";
    }elseif($opcao === 2){
        $opcaoEscolhida ="Pizza";
    }elseif($opcao === 3){
        $opcaoEscolhida ="Efirra";
    } else {
        $opcaoEscolhida ="opção inválida";
    }


?>
    <p><?=$opcaoEscolhida?></p>
<hr>

<!-- _________________________________________________________________ -->
<h2 class="destaque">Switch/Case</h2>

<!-- 4ª Digitação (Aqui) -->
    <?php
        switch($opcao) {
            case 1: $pedido = "Pastel"; break;
            case 2: $pedido = "Pizza"; break;
            case 3: $pedido = "Esfiha"; break;
            default: $pedido = "Opçao inválida"; break;
        }
    ?>
    <p><?=$pedido?></p>
</body>
</html>