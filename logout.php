<?php 
session_start(); //inicia session
unset($_SESSION); // desassocia sessao
session_destroy(); // destroi sessao
header('location:login.php');
?>