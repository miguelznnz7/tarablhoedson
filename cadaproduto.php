<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cada Produto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
            max-width: 600px;
            width: 100%;
        }
        h1 {
            color: #5d5d5d;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background: #f9f9f9;
        }
        .result p {
            margin: 10px 0;
        }
        .result p strong {
            display: inline-block;
            width: 150px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $codigoProduto = "";
        $descricao = "";
        $estoque = 0;
        $preco = 0.0;
        $total = 0.0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $codigoProduto = htmlspecialchars($_POST['codigoProduto']);
            $descricao = htmlspecialchars($_POST['descricao']);
            $estoque = (int)$_POST['estoque'];
            $preco = (float)$_POST['preco'];
            $total = $estoque * $preco;
        }
        ?>

        <h1>Cadastro de Produto</h1>
        <form action="" method="post">
            <label for="codigoProduto">Código do Produto:</label>
            <input type="text" id="codigoProduto" name="codigoProduto" value="<?php echo htmlspecialchars($codigoProduto); ?>" required>
            
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" value="<?php echo htmlspecialchars($descricao); ?>" required>
            
            <label for="estoque">Estoque:</label>
            <input type="number" id="estoque" name="estoque" value="<?php echo htmlspecialchars($estoque); ?>" min="0" required>
            
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" value="<?php echo htmlspecialchars($preco); ?>" step="0.01" min="0" required>
            
            <input type="submit" value="Calcular Total">
        </form>

        
</body>
</html>

</head>
<body>
<?php

$codigoProduto = "";
$descricao = "";
$estoque = 0;
$preco = 0.0;
$total = 0.0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $codigoProduto = htmlspecialchars($_POST['codigoProduto']);
    $descricao = htmlspecialchars($_POST['descricao']);
    $estoque = (int)$_POST['estoque'];
    $preco = (float)$_POST['preco'];

    
    $total = $estoque * $preco;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="cadproduto.php" method="post">
        <label for="codigoProduto">Código do Produto:</label>
        <input type="text" id="codigoProduto" name="codigoProduto" value="<?php echo htmlspecialchars($codigoProduto); ?>" required>
        <br><br>

        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" value="<?php echo htmlspecialchars($descricao); ?>" required>
        <br><br>

        <label for="estoque">Estoque:</label>
        <input type="number" id="estoque" name="estoque" value="<?php echo htmlspecialchars($estoque); ?>" min="0" required>
        <br><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" value="<?php echo htmlspecialchars($preco); ?>" step="0.01" min="0" required>
        <br><br>

        <input type="submit" value="Calcular Total">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Resultado:</h2>
        <p><strong>Código do Produto:</strong> <?php echo htmlspecialchars($codigoProduto); ?></p>
        <p><strong>Descrição:</strong> <?php echo htmlspecialchars($descricao); ?></p>
        <p><strong>Estoque:</strong> <?php echo htmlspecialchars($estoque); ?></p>
        <p><strong>Preço:</strong> R$ <?php echo number_format($preco, 2, ',', '.'); ?></p>
        <p><strong>Total:</strong> R$ <?php echo number_format($total, 2, ',', '.'); ?></p>
    <?php endif; ?>
</body>
</html>

    
</body>
</html>