<?php

namespace Hogwarts\Models\Academico;

class Disciplina {

    private $nome;
    private $notas = [];

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function registrarNota($aluno, $nota) {
        $this->notas[$aluno] = $nota;
    }

    public function boletim() {
        return $this->notas;
    }
    
}
