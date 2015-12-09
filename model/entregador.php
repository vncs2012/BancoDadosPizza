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
class entregador extends BD {

    function inserir() {
        $dados = $this->dados();
        $query = "INSERT INTO `tb_entragador`(`no_entregador`)
                      values('" . implode("','", $dados) . "')";
        if ($this->conexao()->query($query)) {
            print "<h1>Salvo</h1>";
        }
    }

    function listar() {
        $query = "SELECT * FROM tb_entragador";
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function deletar() {
        $query = "DELETE FROM tb_entragador
                WHERE cd_entragador =" . $_REQUEST['id'];
        $this->conexao()->query($query);
    }

    function listarUM() {
        $query = "select * from tb_entragador where cd_entragador =" . $_REQUEST['id'];
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
