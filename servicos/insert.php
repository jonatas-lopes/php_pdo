<?php 

declare(strict_types=1);
$pdo = require 'conect.php';


?>

<html>

<form action=insert.php method=post >
<?php


$sql = 'insert into usuarios(email,senha) values(?,?)';


$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_POST['email']);
$prepare->bindParam(2, $_POST['senha']);
$prepare->execute();

echo $prepare->rowCount();

?>
                <p>Email: <input type="text" name="email" /> </p>     
                <p>Senha: <input type="text" name="senha" /> </p>  
                <p><input type="submit" value="Enviar" /></p>


</form>



</html>