
<h1>Listagem Tamanho Pizza</h1>
<hr />
<a href="?p=med&acao=formIncluir"><button class="btn btn-default"  type="button" style="margin-left: 85%">Novo Registro<div class="ripple-wrapper"></div></button></a>
<div class="portlet-body">  
    <table class="table table-hover">
        <thead>
        <th>Nome</th>
        <th>Opçoẽs</th>

        </thead>
        <?php
        while ($obj = mysqli_fetch_object($lista)) {
            ?>
            <tbody>
            <td><?php print $obj->no_tamanho; ?></td>
            <th>
                <a class="btn btn-info" href="?p=med&acao=alterarForm&id=<?php print $obj->cd_tamanho; ?>">Editar</a>
                <a class="btn btn-warning"  href="?p=med&acao=excluir&id=<?php print $obj->cd_tamanho; ?>">Excluir</a>
            </th>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>
