<h1>Cadastro de Entregador</h1>
<hr />
<a href="?p=ent&acao=formIncluir"><button class="btn btn-default"  type="button" style="margin-left: 85%">Novo Registro<div class="ripple-wrapper"></div></button></a>
<div class="portlet-body">  
    <table class="table table-hover">
        <thead>
        <th>Entregador</th>
        <th>Opção</th>
        </thead>
        <?php
        while ($obj = mysqli_fetch_object($lista)) {
            ?>
            <tbody>
            <td><?php print $obj->no_entregador; ?></td>
            <th>
                <a  href="?p=ent&acao=alterarForm&id=<?php print $obj->cd_entragador; ?>"><span class="glyphicon glyphicon-pencil" ></span></a>
                <a href="?p=ent&acao=excluir&id=<?php print $obj->cd_entragador; ?>"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </th>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>