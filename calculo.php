<?php

    session_start();
    $salarios = $_SESSION["salario"];
    $dependente = $_SESSION["dependente"];
    $pensao = $_SESSION["pensao"];
    $outros = $_SESSION["outros"];

    function calcularImpostoRenda($salario, $nDep, $outras, $pensao){
        $base = $salario - ($nDep * 189.59 + $outras + $pensao);
        $faixa = array(4664.68,3751.05,2826.65,1903.98);
        
        $percent = array(0.275,0.225,0.15,0.075);
        $irpf = 0;
        for($i = 0;$i<4;$i++){
            if($base > $faixa[$i]){
                $irpf += ($base - $faixa[$i]) * $percent[$i];
                $base = $faixa[$i];
            }
        }

        return [number_format($salario, 2, ',', ' '),number_format($irpf, 2, ',', ' ')];

    }

    [$salario,$imposto] = calcularImpostoRenda($salarios,$dependente,$pensao, $outros);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./irpfcss/displaystyle.css">
    <title>Imposto</title>
</head>
<body>
    <main>
        <div class="display">
            <div class="title">
                <h1>Imposto </h1>
                <img src="./assets/moeda.png" alt="">

            </div>
            <h2>Aqui estao os valores no quais voce devera pagar de imposto de renda</h2>
            <p>Seu salario inicial eh de R$  <?php echo $salario?> reais.</p>
            <p>O total de impostos que devera pagar eh de R$  <?php echo $imposto ?> reais.</p>
        </div>
    </main>
</body>
</html>
