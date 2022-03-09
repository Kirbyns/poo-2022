<?php
//MINHA TENTATIVA DE CRIAR 

//criação da interface de CRUD 
interface Crud{
   public function cadastra();
   public function edita();
   public function apaga();
   public function lista();
}

//CORREÇÃO do professor


interface Crud{
   public function criar(array $dados): bool;
   public function apagar(int $id):bool;
   public function editar(int $id, array $dados):bool;
   public function listar(int $id = null):array;
}