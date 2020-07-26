<?php 

declare(strict_types=1);

$pdo = require 'conect.php';
$sql = 'SELECT * FROM usuarios';


echo '<h3>Usuarios</h3>';

foreach($pdo->query($sql) as $key => $value){

    echo 'Id: ' . $value['id'] . '<br> Email: '. $value['email'] . '<hr>';


}