<html>
    <head>
        <title>IRPF</title>
    </head>
    <body>
        <?php
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
                
                echo "Salário base de cálculo: ". number_format($salario, 2, ',', ' ') ."<br>";
                echo "Valor do imposto: " . number_format($irpf, 2, ',', ' ') . "<br>";
            }

            calcularImpostoRenda(16000,2,100,0);
                ?>
    </body>
    </html>