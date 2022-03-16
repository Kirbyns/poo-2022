<?php
require_once('.../classes/produto.class.php');


$produto1 =new Produto;

$array = [
   'nome' => 'produto1',
   'descricao' =>'perna de pau',
    'preco' => 6.9];


    $produto->$array;



//correção professor
    
class Main{
    private $produtook;
    public function __construct()
    {
        $this->produtook = new Produto;
        $this->novo();
    }

    function novo ($vetor):void
    {
        if(is_array($vetor))
        {
            $this->produto->criar($vetor);
        }
        else
        {
            throw 'Erro';
        }
        
    }

    public function __destruct()
    {
        echo "\nDestruir executado \n";
    }
}

 new Main;
