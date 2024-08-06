<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .summary {
            margin-top: 20px;
            padding: 20px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .summary p {
            margin: 5px 0;
            color: #333;
        }
        .summary strong {
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Cadastro de Fornecedor</h1>

    <?php
    $codigoFornecedor = $nome = $email = $cnpj = $vlUltCompra = $contato = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigoFornecedor = htmlspecialchars($_POST['CodigoFornecedor']);
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $cnpj = htmlspecialchars($_POST['cnpj']);
        $vlUltCompra = htmlspecialchars($_POST['VlUltCompra']);
        $contato = htmlspecialchars($_POST['contato']);
    }
    ?>

    <form action="cadfornecedor.php" method="post">
        <label for="CodigoFornecedor">Código Fornecedor:</label>
        <input type="text" id="CodigoFornecedor" name="CodigoFornecedor" value="<?php echo htmlspecialchars($codigoFornecedor); ?>" required>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>

        <label for="cnpj">CNPJ:</label>
        <input type="text" id="cnpj" name="cnpj" value="<?php echo htmlspecialchars($cnpj); ?>" required>

        <label for="VlUltCompra">Valor Última Compra:</label>
        <input type="text" id="VlUltCompra" name="VlUltCompra" value="<?php echo htmlspecialchars($vlUltCompra); ?>" required>

        <label for="contato">Contato:</label>
        <input type="text" id="contato" name="contato" value="<?php echo htmlspecialchars($contato); ?>" required>

        <input type="submit" value="Cadastrar">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="summary">
            <h2>Resumo do Fornecedor</h2>
            <p><strong>Código Fornecedor:</strong> <?php echo $codigoFornecedor; ?></p>
            <p><strong>Nome:</strong> <?php echo $nome; ?></p>
            <p><strong>E-mail:</strong> <?php echo $email; ?></p>
            <p><strong>CNPJ:</strong> <?php echo $cnpj; ?></p>
            <p><strong>Valor Última Compra:</strong> R$ <?php echo number_format($vlUltCompra, 2, ',', '.'); ?></p>
            <p><strong>Contato:</strong> <?php echo $contato; ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
