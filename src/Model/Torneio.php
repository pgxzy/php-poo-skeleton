<?php

namespace Hogwarts\Models\Torneio;

class Torneio {

    private $nome;
    private $desafios = [];

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function adicionarDesafio($desafio) {
        $this->desafios[] = $desafio;
    }

    public function listarDesafios() {
        return $this->desafios;
    }
    
}
