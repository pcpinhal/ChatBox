<?php
include_once 'conexao.php';
if(isset($_POST['Enviar']))
{
    $nome = $_POST['txtNome'];
    $mensagem = $_POST['txtMensagem'];
    $sql = "INSERT INTO tb_chat (nome, mensagem) VALUES ('$nome', '$mensagem')";
    try
    {
        mysqli_query($conexao, $sql);
        echo "<h1 class='sucesso'>Mensagem enviada com sucesso !!!</h1>";
    }catch(Exception $e){
        echo "Erro FATAL ! ". mysqli_error($conexao);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBox</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>ChatBox - Chat em tempo real</h1>
    <div class="chatBox" id="chatBox">
        <!-- Aqui ficaram as mensagens do chat -->
    </div>
    <form action="index.php" method="post" enctype="multipart/form-data" class="form-chat">
        <input type="text" name="txtNome" id="txtNome" placeholder="Digite seu nome..." required>
        <input type="text" name="txtMensagem" id="txtMensagem" placeholder="Digite sua mensagem..." required>
        <input type="submit" value="Enviar" name="Enviar">
    </form>

<script src="script.js"></script>
</body>
</html>