<?php

if ($_REQUEST['p'] == 'cli') {
    include 'acao/acaoCliente.php';
} else if ($_REQUEST['p'] == 'fun') {
    include 'acao/acaoFuncionario.php';
} else if ($_REQUEST['p'] == 'ent') {
    include 'acao/acaoEntregador.php';
} else if ($_REQUEST['p'] == 'med') {
    include 'acao/acaoMedida.php';
} else if ($_REQUEST['p'] == 'piz') {
    include 'acao/acaoPizza.php';
}else if ($_REQUEST['p'] == 'beb') {
    include 'acao/acaoBebida.php';
}else if ($_REQUEST['p'] == 'adc') {
    include 'acao/acaoAdicionais.php';
}else if ($_REQUEST['p'] == 'ped') {
    include 'acao/acaoPedido.php';
}