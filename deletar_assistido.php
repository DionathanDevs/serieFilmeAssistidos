<?php
require_once 'verify.php'; // Verifica se o usuário está logado
require_once 'functions.php'; // Funções auxiliares
require_once 'conn.php'; // Conexão com o banco
$conn = conn();
// Verifica se o ID foi enviado e é numérico
if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('location: index.php?ms=4'); // "Campos obrigatórios não preenchidos"
    exit;
}

$id_assistido = (int)$_GET['id'];
$id_usuario = $_SESSION['id']; // ID do usuário logado

// prepara a consulta para deletar apenas se o registro pertencer ao usuário
$sql = "DELETE FROM tbwatches WHERE id = ? AND id_user = ?";
$stmt = mysqli_prepare($conn, $sql);

if(!$stmt) {
    header('location: index.php?ms=2'); // "Falha ao preparar a consulta SQL"
    exit;
}

// vincula os parâmetros
if(!mysqli_stmt_bind_param($stmt, "ii", $id_assistido, $id_usuario)) {
    header('location: index.php?ms=3'); // "Falha ao vincular parâmetros"
    exit;
}

// executa a exclusão
if(mysqli_stmt_execute($stmt)) {
    // redireciona com mensagem de sucesso
    header('location: index.php?ms=6'); // "Operação realizada com sucesso!"
} else {
    // redireciona com mensagem de erro
    header('location: index.php?ms=5'); // "Falha ao executar a operação"
}

exit;
?>