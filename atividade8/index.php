<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingressos</title>
</head>
<body>
    <h1>Verifique se você pode dirigir</h1> 
    <form method="POST"> 
        <input type="text" name="nome" placeholder="Digite o seu nome" require>
        <label for="idade">Digite sua idade:</label> 
        <input type="number" name="idade" id="idade" required> 
        <button type="submit">Verificar</button> 
    </form>

    <?php
    
    if (isset($_POST['idade' && 'nome'])) {
        $idade = $_POST['idade'];
        $nome = $_POST['nome'];
        if ($idade <= 18) { 
            echo "<p>Ingresso não permitido para menores de 18 anos.</p>"; 
        } else {
            echo "<p>Bem vindo $nome!</p>"; 
        }
    }
    $ingresso = 1;
    switch($ingresso){
    case 1:
        $preço = 100.00;
        $nomeingresso = "VIP";
        break;
    case 2:
        $preço = 50.00;
        $nomeingresso = "Regular";
        break;
    case 3:
        $preço = 20.00;
        $nomeingresso = "Básico";
        break;
    default:
        echo "Ingresso não escolhido";
    }
    echo "<p>Ingresso: $nomeingresso</p>"
    echo "Valor do ingresso: R$ " . number_format($preço, 2, ',' , '.');
    ?>
</body>
</html>