<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe a idade enviada pelo usuário
    $idade = $_POST['idade'];

    // Verifica se a idade é um número válido
    if (is_numeric($idade)) {
        // Verifica se a pessoa é maior ou menor de idade
        if ($idade >= 18) {
            echo "<h3>Você é maior de idade.</h3>";
        } else {
            echo "<h3>Você é menor de idade.</h3>";
        }
    } else {
        echo "<h3>Por favor, insira uma idade válida.</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Verificação de Idade</title>
</head>
<body>
    <h1>Exercício de Verificação de Idade</h1>

    <!-- Formulário para inserir a idade -->
    <form action="" method="POST">
        <label for="idade">Digite sua idade:</label>
        <input type="text" id="idade" name="idade" required>
        <button type="submit">Verificar Idade</button>
    </form>

</body>
</html>
