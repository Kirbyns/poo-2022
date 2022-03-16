<?php
chdir(__DIR__);// ele  acessa o Diretorio  principal e altera
require_once'Usuario.class.php'; // solicita o acesso ao arquivo
require_once'../interfaces/Usuario.interface.php'; // solicita o acesso ao arquivo


class Vendedor extends Usuario implements iUsuario{

    public function acao(array $idProdutos):bool{
        echo"Executa ação do vendedor";
        return true;
    }

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