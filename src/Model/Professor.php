<?php

namespace Hogwarts\Models\Funcionario;

class Professor {

    private $nome;
    private $disciplinas = [];

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function adicionarDisciplina($disciplina) {
        $this->disciplinas[] = $disciplina;
    }

    public function listarDisciplinas() {
        return $this->disciplinas;
    }
    
}
