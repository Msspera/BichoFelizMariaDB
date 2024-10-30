<?php

namespace MODEL;
class Animal {
    // interrogação ? antes do tipo cria variável que pode ser nula
    private ?int $id;
    private ?string $nome;
    private ?string $especie;
    private ?string $condicao;
    private ?string $dono;

    public function __construct() // construtor não parametrizado
    {
 
    }


    //getters e setters
    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }


    public function getNome(){
        return $this->nome;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }


    public function getEspecie(){
        return $this->especie;
    }
    public function setEspecie(string $especie){
        $this->especie = $especie;
    }


    public function getCondicao(){
        return $this->condicao;
    }
    public function setCondicao(string $condicao){
        $this->condicao = $condicao;
    }

    public function getDono(){
        return $this->dono;
    }
    public function setDono(string $dono){
        $this->dono = $dono;
    }
}

?>