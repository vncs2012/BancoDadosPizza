<h1>Listagem Adicional Pizza</h1>
<hr />
<a href="?p=adc&acao=formIncluir"><button class="btn btn-default"  type="button" style="margin-left: 85%">Novo Registro<div class="ripple-wrapper"></div></button></a>
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
            <td><?php print $obj->no_adicional; ?></td>
            <td><?php print $obj->vl_adicional; ?></td>
            <th>
                <a  class="btn btn-info" href="?p=adc&acao=alterarForm&id=<?php print $obj->cd_adicionais; ?>">Editar</a>
                <a  class="btn btn-warning" href="?p=adc&acao=excluir&id=<?php print $obj->cd_adicionais; ?>">Excluir</a>
            </th>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>
