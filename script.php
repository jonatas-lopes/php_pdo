<?php 

include 'sessao.php';
$pdo = require 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];


if(empty($_POST['email']) OR empty($_POST['senha'])){

    setErro("Todos os campos devem ser preenchidos");
    header('location:index.php');
    return;

}



