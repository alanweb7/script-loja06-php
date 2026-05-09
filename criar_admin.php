<?php
require_once('_config.php');

$conn = new mysqli($config['SERVIDOR'], $config['USUARIO'], $config['SENHA'], $config['BANCO']);
if ($conn->connect_error) { die("Erro de conexão: " . $conn->connect_error); }

$usuario_md5 = md5('admin');
$senha_md5   = md5('123456');

// Remove todos os registros duplicados/anteriores do admin
$conn->query("DELETE FROM adm_usuario WHERE usuario='$usuario_md5'");

// Insere o admin limpo
$sql = "INSERT INTO adm_usuario (codigo, nome, email_recuperacao, usuario, senha)
        VALUES ('1', 'Administrador', 'admin@exemplo.com', '$usuario_md5', '$senha_md5')";

if ($conn->query($sql) === true) {
    echo "Usuário admin criado com sucesso!<br>";
    echo "Login: admin<br>";
    echo "Senha: 123456<br>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
