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
class cliente extends BD {

    function inserir() {
        $dados = $this->dados();
        $query = "INSERT INTO `tb_cliente`(`no_cliente`, `nu_telefone`, `cpf`, `ds_endereco`) 
                      values('" . implode("','", $dados) . "')";
        if ($this->conexao()->query($query)) {
            print "<h1>Salvo</h1>";
            return $this->conexao()->insert_id;
        }
    }

    function alterar() {
        $dados = $this->dados();
        $query = "UPDATE tb_cliente
            SET no_cliente='{$dados['name']}',nu_telefone='{$dados['telefone']}',cpf='{$dados['cpf']}',ds_endereco='{$dados['ds_endereco']}'
            WHERE cd_cliente='{$dados['cd_cliente']}'";
        if ($this->conexao()->query($query)) {
            print "<h1>Alterado</h1>";
        }
    }

    function listar() {
        $query = "select * from tb_cliente";
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function deletar() {
        $query = "DELETE FROM tb_cliente
                WHERE cd_cliente =" . $_REQUEST['id'];
        $this->conexao()->query($query);
    }

    function listarUM() {
        $query = "select * from tb_cliente where cd_cliente =" . $_REQUEST['id'];
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
