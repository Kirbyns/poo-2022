<?php
//MINHA TENTATIVA DE CRIAR 

class Sessao {

    protected $id;
    protected $dispositivo;
    protected $localizacao;
    protected $ult_atualizacao;
    protected $id_usuario;

    public function login(){
        echo "Logado";
    }
    public function destruir(){
        echo "destruir";
    }
    public function logout(){
        echo "logout";
    }
    public function atualizar(){
        echo "atualizar";
    }
}

//CORREÇÃO do professor


class Sessao {

    private $id;
    private $dispositivo;
    private $localizacao;
    private $ult_atualizacao;
    private $id_usuario;
    //necessita ficar privado.

    public function login(){
        echo "Logado";
    }
    public function destruir(){
        echo "destruir";
    }
    public function logout(){
        echo "logout";
    }
    public function atualizar(){
        echo "atualizar";
    }
}