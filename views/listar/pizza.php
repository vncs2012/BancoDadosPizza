<h1>Listagem Pizza</h1>
<hr />
<a href="?p=piz&acao=formIncluir"><button class="btn btn-default"  type="button" style="margin-left: 85%">Novo Registro<div class="ripple-wrapper"></div></button></a>
<div class="portlet-body">  
    <table class="table table-hover">
        <thead>
        <th>Nome</th>
        <th>Valor</th>
        <th>Medida</th>
        <th>Opçoẽs</th>

        </thead>
        <?php
        while ($obj = mysqli_fetch_object($lista)) {
            ?>
            <tbody>
            <td><?php print $obj->no_pizza; ?></td>
            <td><?php print $obj->vl_pizza; ?></td>
            <td><?php print $obj->no_tamanho; ?></td>
            <th>
                <a  href="?p=piz&acao=alterarForm&id=<?php print $obj->cd_pizza; ?>"><span class="glyphicon glyphicon-pencil" ></span></a>
                <a href="?p=piz&acao=excluir&id=<?php print $obj->cd_pizza; ?>"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </th>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>
