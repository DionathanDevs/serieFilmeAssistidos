<?php require_once 'verify.php';
require_once 'functions.php';


//verifacando o envio do formulario com functions

if(notForm()){
    header('location:index.php?ms1');
    exit;
}

if(watchesIsEmpty()){
    header('location:index.php?ms8');
    exit;
}
//chamando o arquivo de conexao
require_once 'conn.php';

$conn = conn();
// guardando os dados necessários em váriaveis
$id = $_SESSION['id'];
$title = $_POST['title'];
$genero = $_POST['genero'];
$description = $_POST['description'] ?? '';
$rating = $_POST['rating'];
$tittleType = $_POST['tittleType'];


// query para inserir os dados recebidos
$sql = "INSERT INTO tbwatches (title,genero,description,rating,tittleType,id_user) VALUES (?,?,?,?,?,?)";


//preparando query com statements
$stmt = mysqli_prepare($conn, $sql);



if(!$stmt){
    header('location:index.php?ms=5');
    exit;
}

if(!mysqli_stmt_bind_param($stmt, "sssisi", $title, $genero, $description, $rating, $tittleType, $id)){
    header('location:index.php?ms=5');
    exit;
}

if(!mysqli_stmt_execute($stmt)){
    header('location:index?ms=5');
    exit;
}       

?>