<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando os dados do formulário
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $ano_nascimento = $_POST['ano_nascimento'];

    // Criando uma string com os dados
    $dados = "Nome: $nome, Sexo: $sexo, Ano de Nascimento: $ano_nascimento\n";

    // Armazenando os dados em um arquivo txt
    $arquivo = 'dados.txt';
    file_put_contents($arquivo, $dados, FILE_APPEND);

    echo "Dados armazenados com sucesso!";
}
?>