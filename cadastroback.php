<?php 

require_once 'functions.php';

//chamando a função para verificar se os campos estão vazios se true é vazio, se false não está vazio
if(registerIsEmpty()){
    header('location:cadastro.php?ms=1'); // redireciona para a mesma página, porém com o alerta de erro que esta vazio os campos
    exit;
}

if(notForm()){
    header('location:cadastro.php?ms=0'); // redireciona para a mesma página, porém com o alerta de erro de requisicao sem ser via post
    exit;
}

if(verifyPassword()){
    header('location:cadastro.php?ms=1'); // redireciona para a mesma página, porém com erro de senhas não identicas
}

// chamando arquivo conexao com banco

require_once 'conn.php';

// recebendo dados em variaveis apos validação 
$user = $_POST['user'];

$password = $_POST['password'];

$email = $_POST['email'];

// armazenando conexao em variavel 

$conn = conn();

// armazenando sql para enviar os dados ao banco

$sql = "INSERT INTO tbusers (user, password, email) VALUES (?,?,?)";

// armazenando em uma variavel o prepare stmt para preparar o sql

$stmt = mysqli_prepare($conn, $sql);

// se retornar false voltar para a pagina cadastro com alerta de erro ao preparar o sql

if(!$stmt){
    header('location:cadastro.php?ms=2');
    exit;
}



?>