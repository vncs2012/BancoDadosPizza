<?php

require 'model/bebida.php';
$oquefazer = new bebida();

$acao = $_REQUEST['acao'];

switch ($acao) {
    case 'listar':
        $lista = $oquefazer->listar();
        include 'views/listar/bebida.php';
        break;
    case 'formIncluir':
        include 'views/incluir/bebida.php';
        break;
    case 'incluir':
        $oquefazer->inserir();
        $lista = $oquefazer->listar();
        include 'views/listar/bebida.php';
        break;
    case 'alterar':
        $oquefazer->alterar();
        $lista = $oquefazer->listar();
        include 'views/listar/bebida.php';
        break;
    case 'alterarForm':
        $listarUm = $oquefazer->listarUM();
        include 'views/alterar/bebida.php';
        break;
    case 'alterarFrom':
        break;

    case 'excluir':
        $oquefazer->deletar();
        $lista = $oquefazer->listar();
        include 'views/listar/bebida.php';
        break;
}
