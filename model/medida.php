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
class medida extends BD {

    function inserir() {
        $dados = $this->dados();
        $query = "INSERT INTO `tb_pizza_medida`( `no_tamanho`)
                      values('" . implode("','", $dados) . "');";
        if (mysqli_query($this->conexao(), $query)) {
            print "<h1>Salvo</h1><br />";
            $teste = mysqli_insert_id($this->conexao());
            print"sa->" . $teste;
        }
    }

    function alterar() {
        $dados = $this->dados();
        $query = "UPDATE tb_pizza_medida
            SET no_tamanho='{$dados['name']}
            WHERE cd_tamanho='{$dados['cd_tamanho']}'";
        if ($this->conexao()->query($query)) {
            print "<h1>Alterado</h1>";
        }
    }

    function listar() {
        $query = "select * from tb_pizza_medida";
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function deletar() {
        $query = "DELETE FROM tb_pizza_medida
                WHERE cd_tamanho =" . $_REQUEST['id'];
        $this->conexao()->query($query);
    }

    function listarUM() {
        $query = "select * from tb_pizza_medida where cd_tamanho =" . $_REQUEST['id'];
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
