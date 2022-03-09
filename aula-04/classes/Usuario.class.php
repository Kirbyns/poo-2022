<?php
chdir(__DIR__);// ele  acessa o Diretorio  principal e altera
require_once'../interfaces/crud.interface.php'; // solicita o acesso ao arquivo

//MINHA TENTATIVA DE CRIAR 

class Usuario extends Perfil implements crud{

    protected $id;
    protected $nome;
    protected $email;
    protected $senha;
    protected $id_perfil;
}

//CORREÇÃO do professor
require_once'../interfaces/crud.interface.php'; // solicita o acesso ao arquivo
require_once'../interfaces/Usuario.interface.php'; // solicita o acesso ao arquivo
class Usuario extends Perfil implements crud, iUsuario{
  


    protected $id;
    protected $nome;
    protected $email;
    protected $senha;
    protected $id_perfil;




    public function criar(array $dados): bool{
        echo "\ncriado usuario $id\n";
        return true;
}
    public function apagar(int $id):bool{
        echo "\napagado usuario $id\n";
        return true;


}
    public function editar(int $id, array $dados):bool{
        echo "\neditado usuario $id\n";
        return true;


}
    public function listar(int $id = null):array{
        echo "\nListado usuario $id\n";
        return true;

}
    public function acao(array $idProdutos):array{
        echo "\ação do  produtos $id\n";
        return true;
} 

}

