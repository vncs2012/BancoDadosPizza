<?php

require 'model/adicionais.php';
$oquefazer = new adicionais();

$acao = $_REQUEST['acao'];

switch ($acao) {
    case 'listar':
        $lista = $oquefazer->listar();
        include 'views/listar/adicionais.php';
        break;
    case 'formIncluir':
        include 'views/incluir/adicionais.php';
        break;
    case 'incluir':
        $oquefazer->inserir();
        $lista = $oquefazer->listar();
        include 'views/listar/adicionais.php';
        break;
    case 'alterar':
        $oquefazer->alterar();
        $lista = $oquefazer->listar();
        include 'views/listar/adicionais.php';
        break;
    case 'alterarForm':
        $listarUm = $oquefazer->listarUM();
        include 'views/alterar/adicionais.php';
        break;
    case 'alterarFrom':
        break;

    case 'excluir':
        $oquefazer->deletar();
        $lista = $oquefazer->listar();
        include 'views/listar/adicionais.php';
        break;
}
