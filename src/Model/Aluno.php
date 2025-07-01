<?php

namespace Hogwarts\Models\Aluno;

class Aluno {

    private $nome;
    private $email;
    private $cartaEnviada = false;
    private $cartaConfirmada = false;

    public function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function enviarCarta() {
        $this->cartaEnviada = true;
    }

    public function confirmarCarta() {
        $this->cartaConfirmada = true;
    }

    public function getStatus() {
        return [
            'nome' => $this->nome,
            'email' => $this->email,
            'enviada' => $this->cartaEnviada,
            'confirmada' => $this->cartaConfirmada
        ];
    }
    
}
