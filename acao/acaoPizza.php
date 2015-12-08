<?php

require 'model/pizza.php';
$oquefazer = new pizza();

$acao = $_REQUEST['acao'];

switch ($acao) {
    case 'listar':
        $lista = $oquefazer->listar();
        include 'views/listar/pizza.php';
        break;
    case 'formIncluir':
        $medida = $oquefazer->seclect();  
        include 'views/incluir/pizza.php';
        break;
    case 'incluir':
        $oquefazer->inserir();
        $lista = $oquefazer->listar();
        include 'views/listar/pizza.php';
        break;
    case 'alterar':
        $oquefazer->alterar();
        $lista = $oquefazer->listar();
        include 'views/listar/pizza.php';
        break;
    case 'alterarForm':
        $medida = $oquefazer->seclect();  
        $listarUm = $oquefazer->listarUM();
        include 'views/alterar/pizza.php';
        break;
    case 'alterarFrom':
        break;

    case 'excluir':
        $oquefazer->deletar();
        $lista = $oquefazer->listar();
        include 'views/listar/pizza.php';
        break;
}
