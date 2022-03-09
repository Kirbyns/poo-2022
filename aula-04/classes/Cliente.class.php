<?php
chdir(__DIR__);// ele  acessa o Diretorio  principal e altera
require_once'Usuario.class.php'; // solicita o acesso ao arquivo
require_once'../interfaces/Usuario.interface.php'; // solicita o acesso ao arquivo


class Cliente extends Usuario implements iUsuario{

    public function acao(array $idProdutos):bool{
        echo"Executa ação do cliente";
    }
}