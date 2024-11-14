<?php

session_start();

// Verifica se o usuário está tentando acessar uma das páginas específicas
$paginaAtual = basename($_SERVER['PHP_SELF']); // Obtém o nome da página atual

// Condições para aplicar o bloqueio
if (in_array($paginaAtual, ['inserir_anuncio.php', 'painel_anuncios.php'])) {
    if (!isset($_SESSION['idUser'])) {
        die("<h1>Você não pode acessar esta página porque não está logado.</h1><p><a href=\"login.php\">Entrar</a></p>");
    }
}

$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'usuarios';

// $mysqli = mysqli_connect($host, $usuario, $senha, $database);
$pdo = new PDO("mysql:dbname=".$database."; host=".$host, $usuario, $senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->query("SELECT * FROM `login`");
$sql->execute();

echo $sql->rowCount();

?>
