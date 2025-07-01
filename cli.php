<?php

require 'vendor/autoload.php';

use Hogwarts\Models\Aluno\Aluno;
use Hogwarts\Models\Casa\ChapeuSeletor;

echo "Bem-vindo ao Sistema de Hogwarts!\n";
echo "1. Cadastrar aluno e selecionar casa\n";
echo "Escolha uma opção: ";
$opcao = trim(fgets(STDIN));

if ($opcao == 1) {
    echo "Nome do aluno: ";
    $nome = trim(fgets(STDIN));
    echo "Email do aluno: ";
    $email = trim(fgets(STDIN));

    $aluno = new Aluno($nome, $email);
    $aluno->enviarCarta();
    $aluno->confirmarCarta();

    $chapel = new ChapeuSeletor();
    $casa = $chapel->selecionarCasa();

    echo "Aluno cadastrado com sucesso!\n";
    echo "Casa selecionada: {$casa}\n";
}
