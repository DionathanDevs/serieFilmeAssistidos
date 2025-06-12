<?php 

require_once 'functions.php';


if(notForm()){
    header('location:cadastro.php?ms=0'); // redireciona para a mesma página, porém com o alerta de erro de requisicao sem ser via post
    exit;
}

//chamando a função para verificar se os campos estão vazios se true é vazio, se false não está vazio
if(registerIsEmpty()){
    header('location:cadastro.php?ms=4'); // redireciona para a mesma página, porém com o alerta de erro que esta vazio os campos
    exit;
}



if(verifyPassword()){
    header('location:cadastro.php?ms=1'); // redireciona para a mesma página, porém com erro de senhas não identicas
    exit;
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

//se retornar false deu erro na hora de enviar as variaveis ao sql

if(!mysqli_stmt_bind_param($stmt, "sss", $user, $password, $email)){
    header('location:cadastro.php?ms=3');
    exit;
}

// se retornar true segue o código normalmemente, se retornar false, é porque o sql na hora de ser executado deu algum erro.

if(!mysqli_stmt_execute($stmt)){
    header('location:cadastro.php?ms=4');
    exit;
}

header('location:login.php?ms=5'); // se tudo der certo, chegará aqui e vai ser exibida uma msg de cadastro realizado.

?>