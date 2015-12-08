<?php

require 'model/cliente.php';
$oquefazer = new cliente();

$acao = $_REQUEST['acao'];

switch ($acao) {
    case 'listar':
        $lista = $oquefazer->listar();
        include 'views/listar/cliente.php';
        break;
    case 'formIncluir':
        include 'views/incluir/cliente.php';
        break;
    case 'incluir':
        $oquefazer->inserir();
        $lista = $oquefazer->listar();
        include 'views/listar/cliente.php';
        break;
    case 'alterar':
        $oquefazer->alterar();
        $lista = $oquefazer->listar();
        include 'views/listar/cliente.php';
        break;
    case 'alterarForm':
        $listarUm = $oquefazer->listarUM();
        include 'views/alterar/cliente.php';
        break;
    case 'alterarFrom':
        break;

    case 'excluir':
        $oquefazer->deletar();
        $lista = $oquefazer->listar();
        include 'views/listar/cliente.php';
        break;
}
