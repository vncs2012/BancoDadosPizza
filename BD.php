<?php

//$Mysqli = new mysqli('localhost', 'root', 'vncs', 'agenda');
//
//$query = "INSERT INTO `tb_pessoa` ('select * from tb_pessoa');
//-- $Mysqli->query($query);;
//-- $result->num_rows
//-- $Mysqli->mysql_fetch_row(result);
//-- $Mysqli->mysql_fetch_array(result);
//-- $Mysqli->mysql_fetch_object(result);
//-- $Mysqli->mysql_affected_rows();
class BD {

    public static function conexao() {

        $conexao = new mysqli('localhost', 'root', '@ipe789@', 'pizza');
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
//          
        return $conexao;
    }

}
