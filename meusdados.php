<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Dados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        form {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        p {
            margin: 0.5rem 0;
        }
        .info {
            background-color: #e9ecef;
            padding: 1rem;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $nome = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST['nome']);
        }
        ?>

        <h1>Sobre o Desenvolvedor</h1>

        <form action="MeusDados.php" method="post">
            <label for="nome">Digite seu nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>" required>
            <input type="submit" value="Atualizar">
        </form>

        <?php if ($nome): ?>
            <h2>Informações do Desenvolvedor</h2>
            <div class="info">
                <p><strong>Nome:</strong> <?php echo $nome; ?></p>
                <p><strong>Versão:</strong> 1.1</p>
                <p><strong>Ano:</strong> 2024</p>
            </div>
        <?php else: ?>
            <p>Por favor, insira seu nome para ver mais informações.</p>
        <?php endif; ?>
    </div>
</body>
</html>
