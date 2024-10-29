<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura a visualização em dispositivos móveis -->
    <title>Verificação de Idade para Dirigir</title> <!-- Título da página -->
</head>
<body>
    <h1>Verifique se você pode dirigir</h1> 
    <form method="POST"> 
        <label for="idade">Digite sua idade:</label> 
        <input type="number" name="idade" id="idade" required> 
        <button type="submit">Verificar</button> 
    </form>

    <?php
    
    if (isset($_POST['idade'])) {
        $idade = $_POST['idade'];
        if ($idade >= 18) { 
            echo "<p>Você pode dirigir.</p>"; 
        } else {
            echo "<p>Você ainda não pode dirigir.</p>"; 
        }
    }
    ?>
</body>
</html>