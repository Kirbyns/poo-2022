<?php
chdir(__DIR__);// ele  acessa o Diretorio  principal e altera
//MINHA TENTATIVA DE CRIAR 

class Perfil implements Crud{

    protected $id;
    protected $nome;
    protected $descricao;
    protected $permissoes;
}

//CORREÇÃO do professor

require_once'../interfaces/crud.interface.php'; // solicita o acesso ao arquivo
class Perfil implements Crud{

    private $id;
    private $nome;
    private $descricao;
    private $permissoes; 
    //precisa ser privado para ter o encapsulamento

    public function criar(array $dados): bool{
        echo "\ncriado perfil $id\n";
        return true;
    }
    public function apagar(int $id):bool{
        echo "\napagado perfil $id\n";
        return true;


    }
    public function editar(int $id, array $dados):bool{
        echo "\neditado perfil $id\n";
        return true;


    }
    public function listar(int $id = null):array{
        echo "\nListado perfil $id\n";
        return true;

    }

}