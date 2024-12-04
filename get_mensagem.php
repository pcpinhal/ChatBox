<?php
include_once 'conexao.php';
$sql = "SELECT * FROM tb_chat ORDER BY datahora DESC LIMIT 100;";

$resposta = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resposta) > 0){
    while ($dados = mysqli_fetch_assoc($resposta)){
        echo "
            <div class='mensagem'><strong>$dados[nome]:</strong>
            $dados[mensagem]
            <small>$dados[datahora]</small>.
            </div>
        ";
    }
}else{
    echo "Ainda não há nenhuma mensagem";
}
?>