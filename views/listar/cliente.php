
<h1>Cadastro de Cliente</h1>
<hr />
<a href="?p=cli&acao=formIncluir"><button class="btn btn-default"  type="button" style="margin-left: 85%">Novo Registro<div class="ripple-wrapper"></div></button></a>
<div class="portlet-body">  
    <table class="table table-hover">
        <thead>
        <th>Nome</th>
        <th>telefone</th>
        <th>cpf</th>
        <th>endereço</th>
        <th>Opção</th>
        </thead>
        <?php
        while ($obj = mysqli_fetch_object($lista)) {
            ?>
            <tbody>
            <td><?php print $obj->no_cliente; ?></td>
            <td><?php print $obj->nu_telefone; ?></td>
            <td><?php print $obj->cpf; ?></td>
            <td><?php print $obj->ds_endereco; ?></td>
            <th>
                <a  href="?p=cli&acao=alterarForm&id=<?php print $obj->cd_cliente; ?>"><span class="glyphicon glyphicon-pencil" ></span></a>
                <a href="?p=cli&acao=excluir&id=<?php print $obj->cd_cliente; ?>"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </th>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>
