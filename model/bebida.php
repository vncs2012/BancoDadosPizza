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
class bebida extends BD {

    function inserir() {
        $dados = $this->dados();
        $query = "INSERT INTO `tb_bebida`( `no_bebida`, `vl_bebida`)
                      values('" . implode("','", $dados) . "')";
        if ($this->conexao()->query($query)) {
            print "<h1>Salvo</h1>";
        }
    }

    function alterar() {
        $dados = $this->dados();
        $query = "UPDATE tb_bebida
            SET no_bebida='{$dados['name']}',vl_bebida='{$dados['valor']}'
            WHERE cd_bebida='{$dados['cd_bebida']}'";
        if ($this->conexao()->query($query)) {
            print "<h1>Alterado</h1>";
        }
    }

    function listar() {
        $query = "SELECT * FROM tb_bebida";
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function deletar() {
        $query = "DELETE FROM tb_bebida
                WHERE cd_bebida =" . $_REQUEST['id'];
        $this->conexao()->query($query);
    }

    function listarUM() {
        $query = "select * from tb_bebida where cd_bebida =" . $_REQUEST['id'];
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }
    function dados() {
        $dados = $_REQUEST['item'];
        return $dados;
    }

}
