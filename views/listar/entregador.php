<h1>Listagem de Entregador</h1>
<hr />
<a href="?p=ent&acao=formIncluir"><button class="btn btn-default"  type="button" style="margin-left: 85%">Novo Entregador<div class="ripple-wrapper"></div></button></a>
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
                <a  class="btn btn-info" href="?p=ent&acao=alterarForm&id=<?php print $obj->cd_entragador; ?>">Editar</a>
                <a  class="btn btn-warning" href="?p=ent&acao=excluir&id=<?php print $obj->cd_entragador; ?>">Excluir</a>
            </th>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>