<?php

$bebida = 2;
switch($bebida){
    case 1:
        $preço = 2.50;
        $nomebebida = "Água";
        break;
    case 2:
        $preço = 4.00;
        $nomebebida = "Refrigerante";
        break;
    case 3:
        $preço = 3.50;
        $nomebebida = "Suco";
        break;
    default:
        echo "Escolha uma bebida";
    }
echo "<p>Você escolheu $nomebebida.</p>";
echo "Valor da bebida: R$ " . number_format($preço, 2, ',' , '.');

?>
