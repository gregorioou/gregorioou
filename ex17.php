<?php
function mult_dez($valor, $valormult) {
    $result = $valor * $valormult;
    return $result;
}
$valor = readline("Escreva seu número: ");
$valormult = 10;
$result = mult_dez($valor, $valormult);
print("Valor é: ".$result);