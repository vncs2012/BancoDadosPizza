
<h1>Listagem de Funcionarios</h1>
<hr />
<a href="?p=fun&acao=formIncluir"><button class="btn btn-default"  type="button" style="margin-left: 85%">Novo Funcionarios<div class="ripple-wrapper"></div></button></a>
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
            <td><?php print $obj->login; ?></td>
            <th>
                <a class="btn btn-info"  href="?p=fun&acao=alterarForm&id=<?php print $obj->cd_funcionario; ?>">Editar</a>
                <a class="btn btn-warning"  href="?p=fun&acao=excluir&id=<?php print $obj->cd_funcionario; ?>">Excluir</a>
            </th>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>
