<?php
// conn.example.php

$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_banco";

// Criando a conexão com MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
