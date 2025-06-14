<?php session_start(); 

// inicia a sessão no momento que é chamado o arquivo ^

if(!isset($_SESSION['id']) || !isset($_SESSION['user']) || !isset($_SESSION['password'])){
    header('location:login.php');
 }

 
 ?>