<?php

//MINHA TENTATIVA DE CRIAR 

class Estoque implements crud{

    protected $id;
    protected $quantidade;
    protected $local;
    protected $limite_min;
    protected $id_produto;


    public function avisolimiteMin(){
        echo "avisa o limite minimo de estoque";
    }

}

//CORREÇÃO do professor