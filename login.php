<?php 

session_start();
session_unset();
session_destroy(); 

require_once 'functions.php';

//chamando a função para verificar se os campos estão vazios se true é vazio, se false não está vazio
if(loginIsEmpty()){
    header('location:loginweb.php?ms=1'); // redireciona para a mesma página, porém com o alerta de erro que esta vazio os campos
    exit;
}

if(notForm()){
    header('location:login.php?ms=0'); // redireciona para a mesma página, porém com o alerta de erro de requisicao sem ser via post
    exit;
}


// chamando arquivo conexao com banco

require_once 'conn.php';

// recebendo dados em variaveis apos validação 

$user = $_POST['user'];

$password = $_POST['password'];

// armazenando conexao em variavel 

$conn = conn();

// armazenando sql para enviar os dados ao banco

$sql = "SELECT * FROM tbusers WHERE user = ? AND password = ?";

// armazenando em uma variavel o prepare stmt para preparar o sql

$stmt = mysqli_prepare($conn, $sql);

// se retornar false voltar para a pagina cadastro com alerta de erro ao preparar o sql

if(!$stmt){
    header('location:cadastro.php?ms=2');
    exit;
}

//se retornar false deu erro na hora de enviar as variaveis ao sql

if(!mysqli_stmt_bind_param($stmt, "ss", $user, $password)){
    header('location:cadastro.php?ms=3');
    exit;
}

// se retornar true segue o código normalmemente, se retornar false, é porque o sql na hora de ser executado deu algum erro.

if(!mysqli_stmt_execute($stmt)){
    header('location:cadastro.php?ms=4');
    exit;
}

// armazena os dados retornados na consulta no script

mysqli_stmt_store_result($stmt);

// armazena na váriavel as linhas afetedas na consulta, ou seja se não tiver nenhuma linha a consulta não encontrou nenhum resultado

$rows = mysqli_stmt_num_rows($stmt);

// condicao para verificar se houve linhas afetadas

if($rows !== 1){
    header('location:index.php?ms=8');
    exit;
}

// associa os resultados com as váriaveis declaradas nos parâmetros

mysqli_stmt_bind_result($stmt, $id, $user, $password, $email);

// guarda os dados nas váriaveis associadas.

mysqli_stmt_fetch($stmt);

// inicia a sessão

session_start();

// armazenando na sessão atual os dados do resultado armazenado em váriaveis.

$_SESSION['id'] = $id;

$_SESSION['user'] = $user;

$_SESSION['password'] = $password;

$_SESSION['email'] = $email;


// ao final de tudo redireciona ao index

header('location:index.php');
?>