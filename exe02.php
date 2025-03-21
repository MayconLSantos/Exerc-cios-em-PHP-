
<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número inserido pelo usuário
    $numero = $_POST['numero'];
    
    // Valida se o número é válido (um inteiro positivo)
    if (is_numeric($numero) && $numero > 0) {
        // Calcula a soma de 1 até o número fornecido
        $soma = 0;
        for ($i = 1; $i <= $numero; $i++) {
            $soma += $i;
        }

        // Exibe a soma
        echo "<h3>A soma dos números de 1 até $numero é: $soma</h3>";
    } else {
        echo "<h3>Por favor, insira um número inteiro positivo.</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Soma de Números</title>
</head>
<body>
    <h1>Exercício de Soma de Números</h1>
    <form action="" method="POST">
        <label for="numero">Digite um número inteiro positivo:</label>
        <input type="text" id="numero" name="numero" required>
        <button type="submit">Calcular Soma</button>
    </form>
</body>
</html>
