<?php
// Script para inserir usuário admin padrão
// Execute este arquivo uma vez no servidor para criar o usuário admin

require_once('_config.php');

$servidor = $config['SERVIDOR'];
$usuario_db = $config['USUARIO'];
$senha_db = $config['SENHA'];
$banco = $config['BANCO'];

$conn = new mysqli($servidor, $usuario_db, $senha_db, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Usuario: admin (md5)
$usuario_md5 = md5('admin');

// Senha: 123456 (md5 fornecido)
$senha_md5 = 'e10adc3949ba59abbe56e057f20f883e';

$sql = "INSERT INTO adm_usuario (codigo, nome, email_recuperacao, usuario, senha) VALUES ('1', 'Administrador', 'admin@exemplo.com', '$usuario_md5', '$senha_md5')";

if ($conn->query($sql) === TRUE) {
    echo "Usuário admin criado com sucesso!<br>";
    echo "Login: admin<br>";
    echo "Senha: 123456<br>";
} else {
    echo "Erro ao criar usuário: " . $conn->error . "<br>";
    // Se já existe, tenta atualizar
    $sql_update = "UPDATE adm_usuario SET usuario='$usuario_md5', senha='$senha_md5' WHERE codigo='1'";
    if ($conn->query($sql_update) === TRUE) {
        echo "Usuário admin atualizado com sucesso!<br>";
        echo "Login: admin<br>";
        echo "Senha: 123456<br>";
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}

$conn->close();
?>