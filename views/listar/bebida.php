<h1>Listagem Pizza</h1>
<hr />
<a href="?p=beb&acao=formIncluir"><button class="btn btn-default"  type="button" style="margin-left: 85%">Novo Registro<div class="ripple-wrapper"></div></button></a>
<div class="portlet-body">  
    <table class="table table-hover">
        <thead>
        <th>Nome</th>
        <th>Valor</th>
        <th>Opçoẽs</th>

        </thead>
        <?php
        while ($obj = mysqli_fetch_object($lista)) {
            ?>
            <tbody>
            <td><?php print $obj->no_bebida; ?></td>
            <td><?php print $obj->vl_bebida; ?></td>
            <th>
                <a  href="?p=beb&acao=alterarForm&id=<?php print $obj->cd_bebida; ?>"><span class="glyphicon glyphicon-pencil" ></span></a>
                <a href="?p=beb&acao=excluir&id=<?php print $obj->cd_bebida; ?>"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </th>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>