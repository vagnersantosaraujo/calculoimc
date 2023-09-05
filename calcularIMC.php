
// Declaração da função para descobrir a faixa do IMC
function classificarIMC($imc) {

    // Criação do array com as faixas de IMC
    $faixasIMC = [
        "Até 18.5" => "Magreza",
        "De 18.51 a 24.9" => "Saudável",
        "De 25.0 a 29.9" => "Sobrepeso",
        "De 30.0 a 34.9" => "Obesidade Grau I",
        "De 35.0 a 39.9" => "Obesidade Grau II",
        "Acima de 39.9" => "Obesidade Grau III",
    ];

    // Percorre o array para encontrar a faixa do IMC
    foreach ($faixasIMC as $faixa => $classificacao) {
        if ($imc >= $faixa[0] && $imc <= $faixa[1]) {
            // Imprime a mensagem na tela
            echo "Atenção, seu IMC é $imc, e você está classificado como $classificacao.";
            return;
        }
    }

    // Se a faixa não for encontrada, imprime uma mensagem de erro
    echo "Atenção, o valor do IMC informado não é válido.";
}

// Chamada da função, passando o valor do IMC
classificarIMC(25.30);

?>
