<?php

require 'model/entregador.php';
$oquefazer = new entregador();

$acao = $_REQUEST['acao'];

switch ($acao) {
    case 'listar':
        $lista = $oquefazer->listar();
        include 'views/listar/entregador.php';
        break;
    case 'listarAll':
        $lista = $oquefazer->listar();
        include 'views/listar/entregador.php';
        break;
    case 'formIncluir':
        include 'views/incluir/entregador.php';
        break;
    case 'incluir':
        $oquefazer->inserir();
        $lista = $oquefazer->listar();
        include 'views/listar/entregador.php';
        break;
    case 'alterar':
        $oquefazer->alterar();
        $lista = $oquefazer->listar();
        include 'views/listar/entregador.php';
        break;
    case 'alterarForm':
        $listarUm = $oquefazer->listarUM();
        include 'views/alterar/entregador.php';
        break;
    case 'alterarFrom':
        break;
    case 'excluir':
        $oquefazer->deletar();
        $lista = $oquefazer->listar();
        include 'views/listar/entregador.php';
        break;
}
