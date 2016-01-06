<?php

/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 29/12/15
 * Time: 18:02
 */
class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function correr($km){
        echo $this->nome." está correndo!";
        for($i=0; $km > $i; $i++){
            echo ".";
        }
        echo $this->nome." Terminou de correr!";
    }
}

