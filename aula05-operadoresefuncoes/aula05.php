<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
    <h1>Operadores em PHP</h1>
       <div>
            <h2>Valores</h2>
           <?php
                $n1 = 7;
                $n2 = 4;
                $s = $n1 + $n2;
                echo "Valores recebidos: $n1 e $n2.";
           ?>
       </div>
       <div>
            <h2>Operações com Concatenação</h2>
            <?php 
                echo "A soma entre $n1 e $n2 vale " . ($n1 + $n2);
                echo "</br> A subtração vale " . ($n1 - $n2);
                echo "</br> A multiplicação vale " . ($n1 * $n2);
                echo "</br> A divisão vale " . ($n1 / $n2);
                echo "</br> O módulo vale " . ($n1 % $n2);
                echo "</br> A média entre os valores é " . ($n1 + $n2)/2;
            ?>
       </div>
       <div>
            <h2>Funções Aritméticas</h2>
            <?php 
                $v1 = $_GET["x"];
                $v2 = $_GET["y"];
                echo "Valores recebidos: $v1 e $v2.";
                echo "</br> O valor absoluto de $v2 é: ". abs($v2). ".";
                echo "</br> O valor de $v1<sup>$v2</sup> é: ". pow($v1, $v2);
                echo "</br> A raiz quadrada de $v1 é: ". sqrt($v1);
                echo "</br> O valor de $v2 arredondado é: ". round($v2); 
                /*ceil (sempre pra cima) e floor(sempre para baixo), 
                podem substituir a palavra round*/
                echo "</br> A parte inteira de $v2 é: ". intval($v2);
                echo "</br> O valor de $v1 em moeda é: R$ ". number_format($v1,2,",", ".");
            ?>
       </div>
</body>
</html>