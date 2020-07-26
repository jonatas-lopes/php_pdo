<?php 

declare(strict_types=1);

include 'sessao.php';


$pdo = require 'conexao.php';

$sql = 'select * from usuarios';

$sucesso = getSucesso();

    if(!empty($sucesso)){
        echo $sucesso;
    }

    session_destroy();

echo "<h3> Usuários</h3>";

foreach($pdo->query($sql) as $key => $value){

    echo 'Id: ' . $value['id']. '<br> Email :' . $value['email'] . '<hr>' ;
}

echo "<a href=index.php> Voltar </a>";