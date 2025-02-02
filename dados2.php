<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form action="processar.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="sexo">Sexo:</label><br>
        <input type="text" id="sexo" name="sexo" required><br><br>

        <label for="ano_nascimento">Ano de Nascimento:</label><br>
        <select id="ano_nascimento" name="ano_nascimento" required>
            <option value="">Selecione o ano</option>
            <?php
            // Gera os anos de 1900 até o ano atual
            $ano_atual = date("Y");
            for ($ano = 1900; $ano <= $ano_atual; $ano++) {
                echo "<option value='$ano'>$ano</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>