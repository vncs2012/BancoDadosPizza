<?php

require 'model/medida.php';
$oquefazer = new medida();

$acao = $_REQUEST['acao'];

switch ($acao) {
    case 'listar':
        $lista = $oquefazer->listar();
        include 'views/listar/medida.php';
        break;
    case 'formIncluir':
        include 'views/incluir/medida.php';
        break;
    case 'incluir':
        $oquefazer->inserir();
        $lista = $oquefazer->listar();
        include 'views/listar/medida.php';
        break;
    case 'alterar':
        $oquefazer->alterar();
        $lista = $oquefazer->listar();
        include 'views/listar/medida.php';
        break;
    case 'alterarForm':
        $listarUm = $oquefazer->listarUM();
        include 'views/alterar/medida.php';
        break;
    case 'alterarFrom':
        break;

    case 'excluir':
        $oquefazer->deletar();
        $lista = $oquefazer->listar();
        include 'views/listar/medida.php';
        break;
}
