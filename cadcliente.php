<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007BFF;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .summary {
            margin-top: 20px;
            padding: 10px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .summary p {
            margin: 5px 0;
        }
        .summary p strong {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Cliente</h1>

        <?php
       
        $codigoCliente = $nome = $email = $cpf = $vlUltVenda = $contato = "";

       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $codigoCliente = htmlspecialchars($_POST['CodigoCliente']);
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $cpf = htmlspecialchars($_POST['cpf']);
            $vlUltVenda = htmlspecialchars($_POST['VlUltVenda']);
            $contato = htmlspecialchars($_POST['contato']);
        }
        ?>

        <form action="cadcliente.php" method="post">
            <label for="CodigoCliente">Código Cliente:</label>
            <input type="text" id="CodigoCliente" name="CodigoCliente" value="<?php echo htmlspecialchars($codigoCliente); ?>" required>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="<?php echo htmlspecialchars($cpf); ?>" required>

            <label for="VlUltVenda">Valor Última Venda:</label>
            <input type="text" id="VlUltVenda" name="VlUltVenda" value="<?php echo htmlspecialchars($vlUltVenda); ?>" required>

            <label for="contato">Contato:</label>
            <input type="text" id="contato" name="contato" value="<?php echo htmlspecialchars($contato); ?>" required>

            <input type="submit" value="Cadastrar">
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div class="summary">
                <h2>Resumo do Cliente</h2>
                <p><strong>Código Cliente:</strong> <?php echo $codigoCliente; ?></p>
                <p><strong>Nome:</strong> <?php echo $nome; ?></p>
                <p><strong>E-mail:</strong> <?php echo $email; ?></p>
                <p><strong>CPF:</strong> <?php echo $cpf; ?></p>
                <p><strong>Valor Última Venda:</strong> R$ <?php echo number_format($vlUltVenda, 2, ',', '.'); ?></p>
                <p><strong>Contato:</strong> <?php echo $contato; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
