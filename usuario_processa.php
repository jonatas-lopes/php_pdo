<?php 


declare (strict_types=1);

class usuario_processa{


    private $conexao; 

    public function __construct(){

        
        try{

           $this->conexao = new PDO('mysql:host=localhost;dbname=exerc','root','');

        }catch(Exception $e){

            echo $e->getMessage();
            die();

        }


    }

    public function show() : array{

        $sql = 'select * from usuarios';

        $usuarios = [];
        
        foreach($this->conexao->query($sql) as $key => $value){
            
            array_push($usuarios, $value);
           
        }
        
       return $usuarios;

    }

    public function insert(string $email, string $senha){

        $sql = 'insert into usuarios(email,senha) values(?,?)';
        $prepare = $this->conexao->prepare($sql);
    
        $prepare->bindParam(1, $email);
        $prepare->bindParam(2, $senha);
    
        $prepare->execute();
    
        return $prepare->rowCount();
               
    }

    public function update(string $email, string $senha, int $id) : int{

        $sql = ' update usuarios set email = ?, senha = ? where id = ? ';


        $prepare = $this->conexao->prepare($sql);

       
        $prepare->bindParam(1, $email);
        $prepare->bindParam(2, $senha);
        $prepare->bindParam(3, $id);
        $prepare->execute();

        return $prepare->rowCount();
       
    }

    public function delete(int $id){

        $sql = 'delete from usuarios where id = ?';


        $prepare = $this->conexao->prepare($sql);


        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();
       
    }




}