<?php
require_once('../_config.php');

$conn = new mysqli($config['SERVIDOR'], $config['USUARIO'], $config['SENHA'], $config['BANCO']);
if ($conn->connect_error) { die("Conexão falhou: " . $conn->connect_error); }

$usuario = 'admin';
$senha   = '123456';
$username = md5($usuario);
$password = md5($senha);

echo "<b>md5('admin'):</b> $username<br>";
echo "<b>md5('123456'):</b> $password<br><br>";

$result = $conn->query("SELECT codigo, usuario, senha FROM adm_usuario LIMIT 5");
echo "<b>Registros em adm_usuario:</b><br>";
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "codigo={$row['codigo']} | usuario={$row['usuario']} | senha={$row['senha']}<br>";
    }
} else {
    echo "Nenhum registro encontrado ou tabela inexistente.<br>";
}

echo "<br>";
$result2 = $conn->query("SELECT codigo FROM adm_usuario WHERE usuario='$username' AND senha='$password'");
echo "<b>Resultado do SELECT de login:</b> " . ($result2 ? $result2->num_rows . " linha(s)" : "Query falhou: " . $conn->error) . "<br>";

$conn->close();
