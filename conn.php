<?php

function conn(){
    
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $bank = 'systemWatch';

    $conn = mysqli_connect($server,$user,$password,$bank);

    if(!$conn){
        exit("Erro ao conectar com o banco: " . mysqli_connect_error());
    }

    return $conn;

}



?>