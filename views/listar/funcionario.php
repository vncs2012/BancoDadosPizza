
<h1>Cadastro de Funcionarios</h1>
<hr />
<a href="?p=fun&acao=formIncluir"><button class="btn btn-default"  type="button" style="margin-left: 85%">Novo Registro<div class="ripple-wrapper"></div></button></a>
<div class="portlet-body">  
    <table class="table table-hover">
        <thead>
        <th>Nome</th>
        <th>Login</th>
        <th>Opçoẽs</th>
 
        </thead>
        <?php
        while ($obj = mysqli_fetch_object($lista)) {
            ?>
            <tbody>
            <td><?php print $obj->no_funcionario; ?></td>
            <td><?php print $obj->login;?></td>
             <th>
                <a  href="?p=fun&acao=alterarForm&id=<?php print $obj->cd_funcionario; ?>"><span class="glyphicon glyphicon-pencil" ></span></a>
                <a href="?p=fun&acao=excluir&id=<?php print $obj->cd_funcionario; ?>"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </th>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>
