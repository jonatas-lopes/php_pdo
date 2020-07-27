<?php 
       
        require 'usuario_processa.php';

    $usuario = new usuario_processa();
?>

<html>

        <form action=index.php method=get >

    <?php

    switch ($_GET['op']){


        case 'show';

            echo '<h3>Usuarios</h3>';
            foreach ($usuario->show() as $value){
                echo 'Id: '. $value['id'] . '<br> Email: ' . $value['email'] . '<hr>' ;
                
            }

            
        break;

        case 'insert';

        
        echo $usuario->insert('jota@gmc.com','asda');              
        



           
        break;
            //
        case 'update';

        echo $usuario->update('alteirou@f.com','123',10);              
    
        
        break;  

        case 'delete';

        echo $usuario->delete(10);    

        break;



    }

?>
        <input type="radio" id="op" name="op" value="show">
        <label for="listar">Listar Usuarios</label><br>
        <input type="radio" id="op" name="op" value="insert">
        <label for="inserir">Inserir Usuarios</label><br>
        <input type="radio" id="op" name="op" value="update">
        <label for="alterar">Alterar Usuarios</label><br>
        <input type="radio" id="op" name="op" value="delete">
        <label for="deletar">Deletar Usuarios</label><br>
        <p><input type="submit" value="Enviar" /></p>


        </form>

        

        

</html>

      

