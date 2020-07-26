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

//----------------------------------------------------------------------------------

    $sql = 'insert into usuarios(email,senha) values(?,?)';
    $prepare = $pdo->prepare($sql);

    $prepare->bindParam(1, $email);
    $prepare->bindParam(2, $senha);

    $prepare->execute();

    echo $prepare->rowCount();
    echo setSucesso("Usuario cadastrado");
    header('location:listarUsuario.php');
    return;
// ------------------------------------------------------------------------------

    $sql = 'update into usuarios set email = ?, senha = ? where id = ?';
    $prepare = $pdo->prepare($sql);

    $prepare->bindParam(1, $email);
    $prepare->bindParam(2, $senha);
    $prepare->bindParam(3, $_POST['id']);

    $prepare->execute();

    echo $prepare->rowCount();
    echo setSucesso("Usuario cadastrado");
    header('location:listarUsuario.php');
    return;


// ---------------------------------------------------------------------------------




