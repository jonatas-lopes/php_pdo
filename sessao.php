<?php 

session_start();


function setErro(string $mensagem) : void {

   $_SESSION['valida'] = $mensagem;

}


function getErro() : ?string {

    if(isset($_SESSION['valida']))
    return $_SESSION['valida'];

    return null;

}

function setSucesso(string $mensagem) : void {

    $_SESSION['sucesso'] = $mensagem;

}

function getSucesso() : ?string {

    if(isset($_SESSION['sucesso']))
    return $_SESSION['sucesso'];

    return null;
    
}