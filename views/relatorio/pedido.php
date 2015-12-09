
<h1>Listagem de Pedidos</h1>
<hr />
<?php
$resumo = mysqli_fetch_row($pedido)
?>
<a href="?p=ped&acao=assocFrom&id=<?php print $resumo[0] ?>"><button class="btn btn-default"  type="button" style="margin-left: 85%">Associar Entregador<div class="ripple-wrapper"></div></button></a>
<div class="portlet-body">  
    <table class="table table-hover">
        <caption class="text-center"><?php
            print "<h4><strong>Pedido</strong>-$resumo[0] <strong>Cliente</strong> -$resumo[1] <strong>Data/horario</strong>- $resumo[2]</h4>"
                    . "</br>"
                    . "funcionario- $resumo[3]";
            ?></caption>
        <thead>
        <th>Pizza</th>
        <th>Valor</th>
        </thead>
        <?php
        $total = 0;
        while ($obj = mysqli_fetch_object($pizza)) {
            $total +=$obj->vl_pizza;
            ?>
            <tbody>
            <td><?php print $obj->no_pizza . "-" . $obj->no_tamanho; ?></td>
            <td><?php print $obj->vl_pizza; ?></td>
            </tbody>
            <?php
        }
        ?>
        <thead>
        <th>Adicionais</th>
        <th>Valor</th>
        </thead>
        <?php
        while ($obj = mysqli_fetch_object($adc)) {
            $total +=$obj->vl_adicional;
            ?>
            <tbody>
            <td><?php print $obj->no_adicional ?></td>
            <td><?php print $obj->vl_adicional; ?></td>
            </tbody>
            <?php
        }
        ?>
        <thead>
        <th>Bebidas</th>
        <th>Valor</th>
        </thead>
        <?php
        while ($obj1 = mysqli_fetch_row($bebidas)) {
            $total +=$obj1[3];
            ?>
            <tbody>
            <td><?php print $obj1[2]; ?></td>
            <td><?php print $obj1[3]; ?></td>
            </tbody>
            <?php
        }
        ?>
        <thead>
        <th>Total (R$)</th>
        <th><?php print $total; ?></th>
        </thead>
    </table>
</div>
