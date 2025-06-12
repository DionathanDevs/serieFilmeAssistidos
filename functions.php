<?php 

// verificando se os campos de login foram inseridos

function loginIsEmpty(){

    if(!empty($_POST['user']) || !empty($_POST['password'])){
        return false;
    }else{
        return true;
    }

}

// verificando se os campos de registro foram inseridos

function registerIsEmpty(){

    if(!empty($_POST['user']) || !empty($_POST['email']) || !empty($_POST['password']) || !empty($_POST['repeatpassword'])){
        return false;
    }else{
        return true;
    }

}

// verificando se as senhas informadas são iguais

function verifyPassword(){
    if($_POST['password'] !== $_POST['repeatpassword']){
        return true;
    }else{
        return false;
    }
}

// verificando se foi uma requisicao via post

function notForm(){
    return $_SERVER['REQUEST_METHOD'] !== 'POST';
}

function verifyExceptions(){

//verificando se existe ms enviado na url para tratamento de erros, se nao, encerre aqui.

if(!isset($_GET['ms'])){
    return;
}

//enviado via url para tratamento de erros

//variavel que possui o numero enviado via url, assim podemos estilizar a resposta de retorno dependendo de cada caso

$ms = (int)$_GET['ms'];

// utilizamos switch, para separar o case que será utilizado, dependendo do que for enviado via url

switch($ms){

case 0:

    $msg = "<p class='card-alert'>Por gentileza, utilize o formulário para realizar o acesso.";
    break;

case 1:

    $msg = "<p class='card-alert'>Por gentileza, utilize o formulário para realizar o acesso.";
    break;

case 2:

    $msg = "<p class='card-alert'>Por gentileza, utilize o formulário para realizar o acesso.";
    break;
case 3:

    $msg = "<p class='card-alert'>Por gentileza, utilize o formulário para realizar o acesso.";
    break;
case 4:

    $msg = "<p class='card-alert'>Por gentileza, utilize o formulário para realizar o acesso.";
    break;
case 5:

    $msg = "<p class='card-alert'>Por gentileza, utilize o formulário para realizar o acesso.";
    break;
case 6:

    $msg = "<p class='card-alert'>Por gentileza, utilize o formulário para realizar o acesso.";
    break;
case 7:

    $msg = "<p class='card-alert'>Por gentileza, utilize o formulário para realizar o acesso.";
    break;

default:

    $msg = "";
    break;
}


// apos verificação de qual mensagem será exibida, utilizamos um echo na mensagem para exibi-la. 

echo $msg;

}

?>