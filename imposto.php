<?php
    function calcularImposto(float $rendimento, float $numero, float $valor, float  $outras){
        $imposto = 0;
        $deducaoPorDependente = 189.59;
        $baseDeCalculo = $rendimento - (($deducaoPorDependente * $numero)+$valor+$outras);
        $baseDeCalculo2 = $baseDeCalculo;
        $aliquota = 5;
        $calculo = 0;

        if($baseDeCalculo >= 4664.68){
            $calculo = $baseDeCalculo - 4664.68;
            $baseDeCalculo = 4664.68;
            $imposto += $calculo * 0.275;
            $aliquota += 5;
        }
        if($baseDeCalculo >= 3751.05){
            $calculo = $baseDeCalculo - 3751.05;
            $baseDeCalculo = 3751.05;
            $imposto += $calculo * 0.225;
            $aliquota += 5;
        }
        if($baseDeCalculo >= 2826.65){
            $calculo = $baseDeCalculo - 2826.65;
            $baseDeCalculo = 2826.65;
            $imposto += $calculo * 0.15;
            $aliquota += 5;
        }
        if($baseDeCalculo >= 1903.98){
            $calculo = $baseDeCalculo - 1903.98;
            $baseDeCalculo = 1903.98;
            $imposto += $calculo * 0.075;
            $aliquota += 5;
        }
        else{
            $imposto = 0;
        }
            $aliquota /= 5;
            $faixaEfetiva = $imposto/$rendimento;


            echo "<h1>O imposto eh igual " . $imposto . "</h1>";
            echo "<h1>A faixa eh " . $aliquota . "</h1>";
            echo "<h1>A taxa efetiva eh " . $faixaEfetiva . "</h1>";



    }

    calcularImposto(10000,4,900,900);
?>