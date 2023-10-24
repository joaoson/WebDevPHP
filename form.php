<!DOCTYPE html>
<?php

    session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./irpfcss/style.css">
    <link rel="icon" type="image/x-icon" href="assets/novoicone.ico">

    <title>Imposto</title>
</head>
<body>
    <main id="main">
        <form id="formulario" action="form.php" method="get">
        <div class="title">
                <h1>Imposto </h1>
                <img src="./assets/moeda.png" alt="">
            </div>
            <p>Deseja calcular seu salario?</p>
            <div  class="input">
            <label for="salario">Digite seu salario</label>
            <input id="salario" name="salario" type="text" placeholder="Digite seu Salario Bruto">
            </div>
            <div class="input">
                <label for="dependente">Numero de dependentes</label>
                <input id="dependente" name="dependente" type="text" placeholder="Digite seu numero de dependentes">
            </div>
            <div class="input">
                <label for="pensao">Valor de pensao alimenticia</label>
                <input id="pensao" name="pensao" type="text" placeholder="Digite o valor de pensao alimenticia paga">
            </div>
            <div class="input">
                <label for="outros">Outros descontos</label>
                <input id="outros" name="outros" type="text" placeholder="Digite o valor de outras deducoes">
            </div>
        

            <!--<input id="submit" name="submit" type="submit" value="Submit">-->
            <button  id="submit" name="submit" type="submit"> Enviar</button>
        </form>
    </main>

    <?php
    if(isset($_GET['submit'])){
        $salario = $_GET["salario"];
        $dependente = $_GET["dependente"];
        $pensao = $_GET["pensao"];
        $outros = $_GET["outros"];

        echo $salario;

        $_SESSION["salario"] = $salario;
        $_SESSION["dependente"] = $dependente;
        $_SESSION["pensao"] = $pensao;
        $_SESSION["outros"] = $outros;

        header("Location: calculo.php");

        
    }


?>

<script src="./irpfjs/index.js"></script>
</body>
</html>