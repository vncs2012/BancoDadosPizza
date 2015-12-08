<?php

require 'model/pedido.php';
$oquefazer = new pedido();

$acao = $_REQUEST['acao'];

switch ($acao) {
    case 'listar':
        $lista = $oquefazer->listar();
        include 'views/listar/pedido.php';
        break;
    case 'formIncluir':
        $pizza = $oquefazer->seclect("tb_pizza", '*', array(" p 
	join tb_pizza_medida m on(p.tb_pizza_medida_cd_tamanho = m.cd_tamanho)"));
        $cliente = $oquefazer->seclect("tb_cliente", "*");
        $bebida = $oquefazer->seclect("tb_bebida", "*");
        $adc = $oquefazer->seclect("tb_adicionais", "*");
        include 'views/incluir/pedido.php';
        break;
    case 'incluir':
        $oquefazer->inserir();
        $lista = $oquefazer->listar();
        include 'views/relatorio/pedido.php';
        break;
    case 'alterar':
        $oquefazer->alterar();
        $lista = $oquefazer->listar();
        include 'views/listar/pedido.php';
        break;
    case 'alterarForm':
        $medida = $oquefazer->seclect();
        $listarUm = $oquefazer->listarUM();
        include 'views/alterar/pedido.php';
        break;
    case 'assocFrom':
        $assoc = $oquefazer->seclect("tb_entragador", "*");
        include 'views/incluir/associarEntregador.php';
        break;
    case 'assoc':
        $oquefazer->insereAssoc();
        $lista = $oquefazer->listar();
        include 'views/listar/pedido.php';
        break;

    case 'excluir':
        $oquefazer->deletar();
        $lista = $oquefazer->listar();
        include 'views/listar/pedido.php';
        break;
}
