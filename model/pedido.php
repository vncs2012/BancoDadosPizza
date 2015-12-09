<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of banco
 *
 * @author vinicius
 */
class pedido extends BD {

    function inserir() {
        $conexao = new mysqli('localhost', 'root', '@ipe789@', 'pizza');
        $conexao->begin_transaction();
        $query = "INSERT INTO `tb_pedido`(`cd_funcionario`, `cd_cliente`, `bo_pedido`, `dt_pedido`)
                      values('" . implode("','", $this->dados()) . "')";
        $resulto = $conexao->query($query);
        if ($resulto == true) {
            $cd_pedido = $conexao->insert_id;

//           pizza
            if (isset($_REQUEST['pizza'])) {
                $piz = $_REQUEST['pizza'];
                foreach ($piz as $value) {
                    $pizza['cd_pedido'] = $cd_pedido;
                    $pizza['cd_pizza'] = $value;
                    $query = "INSERT INTO `tb_pedido_pizza`(`cd_pedido`, `cd_pizza`)
                      values('" . implode("','", $pizza) . "')";
                    $res = $conexao->query($query);
                }
            }
//            fim pizza
//            Adicional
            if ($res == true) {
                if (isset($_REQUEST['adc'])) {
                    $adcional = $_REQUEST['adc'];
                    foreach ($adcional as $value) {
                        $adc['cd_pedido'] = $cd_pedido;
                        $adc['cd_adicionais'] = $value;
                        $query = "INSERT INTO `tb_pedido_adicionais`(`cd_pedido`, `cd_adicionais`)
                      values('" . implode("','", $adc) . "')";
                        if ($conexao->query($query)) {
                            $bo_adc = true;
                        } else {
                            $bo_adc = false;
                        }
                    }
                } else {
                    $bo_adc = true;
                }
            } else {
                print "Erro Ao Salvar Pizza";
                return;
            }
//            fim adicional
//            Bebidas
            if ($bo_adc == true) {
                $bebida = $_REQUEST['bebida'];
                foreach ($bebida as $value) {
                    $be['cd_pedido'] = $cd_pedido;
                    $be['cd_bebida'] = $value;
                    $query = "INSERT INTO `tb_pedido_bebida`(`cd_pedido`, `cd_bebida`)
                      values('" . implode("','", $be) . "')";
                    $bo_bebida = $conexao->query($query);
                }
            } else {
                print "Erro Ao Salvar ADC";
                return;
            }

//            Commita Salva se tiver tudo Ok
            if ($bo_bebida == true) {
                $conexao->commit();
                print "Salvo Com sucesso";
                return $cd_pedido;
            } else {
                print "Erro Ao Salvar Bebidas";
                return;
            }
        }
        $conexao->close();
    }

    function listar() {
        $query = "SELECT * FROM tb_pedido 
		join tb_cliente using(cd_cliente)
        join tb_funcionario using (cd_funcionario) order by bo_pedido desc";
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function deletar() {
        $query = "UPDATE tb_pedido
            SET bo_pedido='0'
            WHERE cd_pedido='{$_REQUEST['id']}'";
        if ($this->conexao()->query($query)) {
            print "<h1>Operação efetuada com Sucesso</h1>";
        }
    }

    function seclect($table, $condicao, $join = array(""), $where = array("")) {

        $query = "select {$condicao} from {$table}" . implode("", $join) . implode("", $where);
        $retorno = $this->conexao()->query($query);
        return $retorno;
    }

    function listarPizza($cd = NULL) {
        if (empty($cd)) {
            $cd = $_REQUEST['id'];
        }
        $query = "SELECT * FROM tb_pedido_pizza 
              join tb_pizza p using(cd_pizza) 
              join tb_pizza_medida on(cd_tamanho = p.tb_pizza_medida_cd_tamanho) where cd_pedido = " . $cd;
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function listarAdc($cd = NULL) {
        if (empty($cd)) {
            $cd = $_REQUEST['id'];
        }
        $query = "SELECT * FROM  tb_pedido_adicionais
			join tb_adicionais using(cd_adicionais)
          where cd_pedido =" . $cd;
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function listarBebidas($cd = NULL) {
        if (empty($cd)) {
            $cd = $_REQUEST['id'];
        }
        $query = "SELECT * FROM  tb_pedido_adicionais p
			join tb_adicionais a using(cd_adicionais)
          where p.cd_pedido =" . $cd;
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function listarPedido($cd = NULL) {
        if (empty($cd)) {
            $cd = $_REQUEST['id'];
        }
        $query = "SELECT cd_pedido,no_cliente,dt_pedido,no_funcionario,ds_endereco FROM tb_pedido 
		join tb_cliente using(cd_cliente)
        join tb_funcionario using (cd_funcionario)
        where cd_pedido =" . $cd;
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function insereAssoc() {
        $dados['data'] = date("d/m/Y H:i:s");
        $dados['pedido'] = $_REQUEST['id'];
        $dados['cd_entregador'] = $_REQUEST['cd_entregador'];
        $query = "INSERT INTO`tb_entrega`( `dt_saida`, `cd_pedido`, `cd_entragador`) 
                      values('" . implode("','", $dados) . "')";
        if ($this->conexao()->query($query)) {
            print "<h1>Salvo</h1>";
        }
    }

    function dados() {
        $cli = $_REQUEST['cli'];
        $data = date('m/d/Y H:i:s');
        $cd_funcionario = $_SESSION['cd_pessoa'];
        $dados = array("cd_funcionario" => $cd_funcionario,
            "cd_cliente" => $cli['cd_cliente'],
            "bo_pedido" => true,
            "dt_pedido" => $data);
        return $dados;
    }

}
