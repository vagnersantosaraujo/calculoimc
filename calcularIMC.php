<?php
function calcularIMC($imc) {
    $faixas = array(
        array('faixa' => 18.5, 'classificacao' => 'Magreza'),
        array('faixa' => 24.9, 'classificacao' => 'Saudável'),
        array('faixa' => 29.9, 'classificacao' => 'Sobrepeso'),
        array('faixa' => 34.9, 'classificacao' => 'Obesidade Grau I'),
        array('faixa' => 39.9, 'classificacao' => 'Obesidade Grau II'),
        array('faixa' => INF, 'classificacao' => 'Obesidade Grau III')
    );

    foreach ($faixas as $i => $faixa) {
        if ($imc <= $faixa['faixa']) {
            return $faixa['classificacao'];
        }
    }
}

$imc = 25.30;
$classificacao = calcularIMC($imc);
echo "Atenção, seu IMC é {$imc}, e você está classificado como {$classificacao}.";
?>
