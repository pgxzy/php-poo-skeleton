<?php

namespace Hogwarts\Models\Casa;

class ChapeuSeletor {

    private $casas = ['Grifinoria', 'Sonserina', 'Corvinal', 'Lufa-Lufa'];

    public function selecionarCasa() {
        return $this->casas[array_rand($this->casas)];
    }
    
}
