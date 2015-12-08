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
class adicionais extends BD {

    function inserir() {
        $dados = $this->dados();
        $query = "INSERT INTO `tb_adicionais`( `no_adicional`, `vl_adicional`)
                      values('" . implode("','", $dados) . "')";
        if ($this->conexao()->query($query)) {
            print "<h1>Salvo</h1>";
            print $this->conexao()->insert_id;
        }
    }

    function alterar() {
        $dados = $this->dados();
        $query = "UPDATE tb_adicionais
            SET no_adicional='{$dados['name']}',vl_adicional='{$dados['valor']}'
            WHERE cd_adicionais='{$dados['cd_adicionais']}'";
        if ($this->conexao()->query($query)) {
            print "<h1>Alterado</h1>";
        }
    }

    function listar() {
        $query = "SELECT * FROM tb_adicionais";
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }

    function deletar() {
        $query = "DELETE FROM tb_adicionais
                WHERE cd_adicionais =" . $_REQUEST['id'];
        $this->conexao()->query($query);
    }

    function listarUM() {
        $query = "select * from tb_adicionais where cd_adicionais =" . $_REQUEST['id'];
        $retorno = $this->conexao()->query($query);
//        $arr = $retorno->fetch_fields();
        return $retorno;
    }
    function dados() {
        $dados = $_REQUEST['item'];
        return $dados;
    }

}
