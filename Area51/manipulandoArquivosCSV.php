<?php
// Função que gera um arquivo CSV com os dados fornecidos
function gerarArquivoCSV($nomeArquivo, $users) {
    // Verifica se há dados no array
    if (count($users) > 0) {

        // Abre (ou cria) o arquivo para escrita
        $escreverCSV = fopen($nomeArquivo, 'w');

        // Escreve cada linha no arquivo
        foreach ($users as $linha) {
            fputcsv($escreverCSV, $linha);
        }

        // Fecha o arquivo
        fclose($escreverCSV);

        echo "Arquivo '$nomeArquivo' gerado com sucesso!\n";
    } else {
        echo "Não há dados para escrever no arquivo.\n";
    }
}

// Dados dos usuários (primeira linha é o cabeçalho)
$users = [
    ["Nome", "Idade", "E-mail"],
    ["João", 24, "joao@gmail.com"],
    ["Maria", 24, "maria@gmail.com"],
    ["Pedro", 45, "pedro@yahoo.com"],
    ["Iago", 36, "iago@outlook.com"]
];

// Chamada da função para gerar o CSV
gerarArquivoCSV("usuarios.csv", $users);
?>
