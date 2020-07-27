<?php 

declare(strict_types=1);
$pdo = require 'conect.php';


?>

<html>

<form action=delete.php method=get >
<?php


$sql = 'delete from usuarios where id = ?';


$prepare = $pdo->prepare($sql);


$prepare->bindParam(1, $_GET['id']);
$prepare->execute();

echo $prepare->rowCount();

?>
                 
                <p>Id: <input type="text" name="id" /> </p>  
                <p><input type="submit" value="Enviar" /></p>


</form>



</html>
