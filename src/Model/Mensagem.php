<?php

namespace Hogwarts\Models\Comunicacao;

class Mensagem {

    private $remetente;
    private $destinatario;
    private $conteudo;

    public function __construct($remetente, $destinatario, $conteudo) {
        $this->remetente = $remetente;
        $this->destinatario = $destinatario;
        $this->conteudo = $conteudo;
    }

    public function exibirMensagem() {
        return "{$this->remetente} para {$this->destinatario}: {$this->conteudo}";
    }
    
}
