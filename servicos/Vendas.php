<?php

class Vendas{

private $produto;
private $quantidade;
private $unitario;
private $valor;
private $data;


    public function __construct($produto,$quantidade,$unitario,$data){

        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->unitario = $unitario;
        $this->data = $data;

    }

    public function obterDados(){
        return "Produto :".
        $this->produto . " <br>Quantidade : " .
        $this->quantidade . " <br>Valor unitario : R$ " .
        $this->unitario . " <br>Data : " .
        $this->data;
    }

    public function valorTotal(){
        return "Valor total : " . $this->valor =  $this->unitario * $this->quantidade; 
    }


}
$data = new DateTime();
echo $data->format('d-m-y');



$vendas = new Vendas('TOMATE','10',1.51,'10/10/2020');


echo "<br>";
echo "<br>";


echo $vendas->obterDados();
echo "<br>";
echo "<br>";
echo $vendas->valorTotal();