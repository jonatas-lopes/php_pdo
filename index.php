<?php 
    include 'sessao.php';

?>

<html>

<form action=script.php method=post >
<?php

    $valida = getErro();
    
    if(!empty($valida)){
        echo $valida;
    }

    $sucesso = getSucesso();

    if(!empty($sucesso)){
        echo $sucesso;
    }

    session_destroy();

?>              <p>CADASTRO DE USUARIOS </p> 
                <p>Email: <input type="email" name="email" /> </p>     
                <p>Senha: <input type="password" name="senha" /> </p>  
                <p><input type="submit" value="Enviar" /></p>


</form>



</html>