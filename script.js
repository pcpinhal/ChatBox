// Função para carregar as mensagens do chat
function loadMessages() {
    var atualiza = new XMLHttpRequest();
    atualiza.open("GET", "get_mensagem.php", true);
    atualiza.onreadystatechange = function() {
        if (atualiza.readyState == 4 && atualiza.status == 200) {
            document.getElementById("chatBox").innerHTML = atualiza.responseText;
            // Faz o scroll para o fim das mensagens (para as mais recentes)
            var chatBox = document.getElementById("chatBox");
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    };
    atualiza.send();
}
// Atualiza as mensagens a cada 2 segundos (2000 ms)
setInterval(loadMessages, 2000);
// Carrega as mensagens quando a página é carregada
window.onload = loadMessages;