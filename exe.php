<?php
// Definindo o título da página
$titulo = "Página Inicial em PHP";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Bem-vindo à nossa página inicial em PHP!</h1>
    </header>

    <main>
        <section>
            <h2>Saudação:</h2>
            <?php
                date_default_timezone_set("America/Sao_Paulo");
                $hora = date("H");

                if ($hora < 12) {
                    echo "<p>Bom dia!</p>";
                } elseif ($hora < 18) {
                    echo "<p>Boa tarde!</p>";
                } else {
                    echo "<p>Boa noite!</p>";
                }
            ?>
        </section>

        <section>
            <h2>Formulário de Contato:</h2>
            <form action="processa.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="mensagem">Mensagem:</label><br>
                <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>

                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Minha Página PHP</p>
    </footer>

</body>
</html>
