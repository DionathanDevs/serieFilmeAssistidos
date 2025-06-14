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

function watchesIsEmpty(){
    if(!empty($_POST['title']) || !empty($_POST['rating']) || !empty($_POST['genero']) || !empty($_POST['titleType'])){
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
    
    case 0: $msg = "<p class='card-alert'>Erro: A requisição deve ser feita via formulário.</p>"; 
    break;
    case 1: $msg = "<p class='card-alert'>Erro: As senhas não coincidem.</p>"; 
    break;
    case 2: $msg = "<p class='card-alert'>Erro: Falha ao preparar a consulta SQL.</p>"; 
    break;
    case 3: $msg = "<p class='card-alert'>Erro: Falha ao vincular parâmetros à consulta.</p>"; 
    break;
    case 4: $msg = "<p class='card-alert'>Erro: Campos obrigatórios não preenchidos.</p>"; 
    break;
     case 5:
        $msg = "<p class='card-alert error'>Erro: Falha ao executar a operação no banco de dados.</p>";
        break;
    case 6:
        $msg = "<p class='card-alert success'>Operação realizada com sucesso!</p>";
        break;
    case 7: $msg = "<p class='card-alert'>Erro: Nenhum usuário encontrado com essas credenciais.</p>"; 
    break;
    case 8: $msg = "<p class='card-alert'>Erro: Preencha todos os campos do formulário.</p>"; 
    break;

    default: $msg = ""; 
    break;
}

echo $msg;

}

?>