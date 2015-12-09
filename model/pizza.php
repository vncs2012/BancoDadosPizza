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
class pizza extends BD {

    function inserir() {
        $dados = $this->dados();
        $query = "INSERT INTO `tb_pizza`( `no_pizza`, `vl_pizza`, `tb_pizza_medida_cd_tamanho`)
                      values('" . implode("','", $dados) . "')";
        if ($this->conexao()->query($query)) {
            print "<h1>Salvo</h1>";
        }
    }

    function alterar() {
        $dados = $this->dados();
        $query = "UPDATE tb_pizza
            SET no_pizza='{$dados['name']}',vl_pizza='{$dados['valor']}',tb_pizza_medida_cd_tamanho='{$dados['cd_tamanho']}'
            WHERE cd_pizza='{$dados['cd_pizza']}'";
        if ($this->conexao()->query($query)) {
            print "<h1>Alterado</h1>";
        }
    }

    function listar() {
        $query = "SELECT * FROM tb_pizza p 
	join tb_pizza_medida m on(p.tb_pizza_medida_cd_tamanho = m.cd_tamanho)";
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

 

    function deletar() {
        $query = "DELETE FROM tb_pizza
                WHERE cd_pizza =" . $_REQUEST['id'];
        $this->conexao()->query($query);
    }

    function listarUM() {
        $query = "select * from tb_pizza where cd_pizza =" . $_REQUEST['id'];
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function seclect() {

        $query = "SELECT * from tb_pizza_medida;";
        $retorno = $this->conexao()->query($query);
        return $retorno;
    }

    function dados() {
        $dados = $_REQUEST['item'];
        return $dados;
    }

}
