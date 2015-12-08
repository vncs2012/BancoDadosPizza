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
class funcionario extends BD {

    function inserir() {
        $dados = $this->dados();
        $query = "INSERT INTO `tb_funcionario`( `no_funcionario`, `login`, `senha`)
                      values('" . implode("','", $dados) . "')";
        if ($this->conexao()->query($query)) {
            print "<h1>Salvo</h1>";
            print $this->conexao()->insert_id;
        }
    }

    function alterar() {
        $dados = $this->dados();
        $query = "UPDATE tb_funcionario
            SET no_funcionario='{$dados['name']}',login='{$dados['login']}',senha='{$dados['senha']}'
            WHERE cd_funcionario='{$dados['cd_funcionario']}'";
        if ($this->conexao()->query($query)) {
            print "<h1>Alterado</h1>";
        }
    }

    function listar() {
        $query = "select * from tb_funcionario";
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function deletar() {
        $query = "DELETE FROM tb_funcionario
                WHERE cd_funcionario =" . $_REQUEST['id'];
        $this->conexao()->query($query);
    }

    function listarUM() {
        $query = "select * from tb_funcionario where cd_funcionario =" . $_REQUEST['id'];
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function seclect($table, $condicao, $join = array(""), $where = array("")) {

        $query = "select {$cndicao} from {$table}" . implode("", $join) . implode("", $where);
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function dados() {
        $dados = $_REQUEST['item'];
        return $dados;
    }

}
