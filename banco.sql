DROP DATABASE IF EXISTS chatbox;
CREATE DATABASE chatbox;
USE chatbox;

CREATE TABLE tb_chat(
id_chat				    INT NOT NULL AUTO_INCREMENT,
nome					VARCHAR(255) NOT NULL,
mensagem				TEXT	NOT NULL,
datahora				DATETIME DEFAULT CURRENT_TIMESTAMP(),
PRIMARY KEY (id_chat)
);
SELECT * FROM tb_chat;