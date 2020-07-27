<?php 

declare(strict_types=1);
$pdo = require 'conect.php';


?>

<html>

<form action=update.php method=get >
<?php   


$sql = ' update usuarios set email = ?, senha = ? where id = ? ';


$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['email']);
$prepare->bindParam(2, $_GET['senha']);
$prepare->bindParam(3, $_GET['id']);
$prepare->execute();

echo $prepare->rowCount();

?>
                <p>Email: <input type="text" name="email" /> </p>     
                <p>Senha: <input type="text" name="senha" /> </p>
                <p>id: <input type="text" name="id" /> </p>  
                <p><input type="submit" value="Enviar" /></p>


</form>



</html>