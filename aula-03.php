<?php

/* Aula 03 de POO baseada em php */
interface User {

    public function seLogar();
    public function apagar();
}

class Usuario implements User{

    protected $nome = 'Fernando';
    private $email;
    private $nasc;

    public function seLogar(){
        echo "Logado";
    }
    public function seDeslogar(){
        echo "Tchau";
    }
    public function setNome($val){
        $this->nome = $val;
    }
    public function getNome(){
        return $this->nome;
    }
}

class Professor extends Usuario {  
    public function mudaNome(){
        $this->nome = 'Milan';
    }
}

$luiz = new Professor;
$luiz->mudaNome();
echo $luiz->getNome();


/* conceito de abstração 

 uma identidade (conjunto de atributos e métodos) deve ser única dentro do sistema
 ex: separação de atributos e métodos de pessoas, 
 onde pode haver pessoa fisica e jurídica
 Exemplos que eu sugeriria:
 Automovel(carro/moto/caminhão)
 Empreendimento (casa/predio/loja/sobreloja)


 Polimorfismo

 Polimorfismo é o princípio pelo qual duas ou mais classes derivadas de uma mesma superclasse podem invocar métodos que têm a mesma identificação (assinatura) mas comportamentos distintos, especializados para cada classe derivada, usando para tanto uma referência a um objeto do tipo da superclasse

    tirado do wikipedia mas bem entendido.

    Diagram de componentes
    Descreve como os componentes são conectados para formar componentes maiores

    Conector e plug - demonstra onde conecta/conversa com outro componente
    ex: api de meteorologia seria um plug para passar as informações para um sistema(conector)

    Diagrama de estrutura composta
    mostra mais oalgoritmo por tras do sistema 


    Diagrama de implantação 
    Tudo que precisa para poder implantar uma solução (sistema/bd/aparelhos/etc...)


    Diagrama de classe
    classe é a definição de algo então ele mostra quais são as possiveis caracteriscas de algo, ex (nome/idade/modelo/etc)
    ex: planta de uma casa

    Diagrama de Objeto
    esse já possui as caracteriscas de uma classe mas é pouco usado.
     seria o (propprio nome/propria idade/etc...)


     Diagrama de pacote (dependências)  
     Detalha todas as dependencias do sistema(ides/sistemas/ambientes de execução/etc)

     Diagrama de perfil(metamodelo)
        não entendi



        Diagramas Dinamicos - prover carateristicas comportamentais 

        Diagram de Atividade

        Fluxograma comum usado em bd


        Diagrama de Sequencia   
        Representa a sequencia de processos e as mensagens trocadas no tempo representa interações entre objetos
        Qunato mais para baixo o elemento, significa que aconteceu depois

        Diagrama de caso de Uso
        Representa a interação de um usuario com o sistema (os famosos bonequinhos)


        DIagrama de Comunicação 
        é um diagrama de interação tambem, mas mais sequencial do processo do usuario.

        Diagrama de visão geral de interação 
        Ele usa elementos de outros diagramas para exemplicar algumas partes (mostra sa interações entre os diagramas)

        Diagrama de Estado
        Mostra o comportaento discreto de uma parte do sistema 

        Diagrama de Tempo
        a sequencia acontece da esquerda para direita e mostra o tempo de cada processo 
        



*/