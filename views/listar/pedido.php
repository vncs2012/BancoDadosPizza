
<h1>Listagem de Pedidos</h1>
<hr />
<a href="?p=ped&acao=formIncluir"><button class="btn btn-default"  type="button" style="margin-left: 85%">Novo Pedido<div class="ripple-wrapper"></div></button></a>
<div class="portlet-body">  
    <table class="table table-hover">
        <thead>
        <th>Pedido</th>
        <th>Cliente</th>
        <th>Funcionario</th>
        <th>Data/Horario</th>
        <th>Status</th>
        <th>Opção</th>
        </thead>
        <?php
        while ($obj = mysqli_fetch_object($lista)) {
            ?>
            <tbody>
            <td><?php print $obj->cd_pedido; ?></td>
            <td><?php print $obj->no_cliente; ?></td>
            <td><?php print $obj->no_funcionario; ?></td>
            <td><?php print $obj->dt_pedido; ?></td>
            <td><?php
                if ($obj->bo_pedido == 1) {
                    print '<div class="alert alert-dismissible alert-danger text-center">
                        <strong> Saiu para Entrega</strong>
                    </div>';
                } else {
                    print'
                    <div class="alert alert-dismissible  alert-success text-center">
                        <strong>Entregue</strong>
                    </div>';
                }
                ?></td>
            <th>
                <a    class="btn btn-success"href="?p=ped&acao=alterarForm&id=<?php print $obj->cd_pedido; ?>"><span>Visualizar</span></a>
                <a  class="btn btn-danger" href="?p=ped&acao=excluir&id=<?php print $obj->cd_pedido; ?>"><span>Baixa</span></a>
                <a  class="btn btn-info" href="?p=ped&acao=assocFrom&id=<?php print $obj->cd_pedido; ?>"><span>Associar ao entregador</span></a>
            </th>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>
