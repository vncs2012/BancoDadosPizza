<h1>Alterar Pizza</h1>
<hr />
<div class="portlet-body"> 
    <form action="?p=piz&acao=alterar" method="POST">
        <?php
        while ($obj = mysqli_fetch_object($listarUm)) {
            ?>
            <div class="form-group col-lg-12">
                <label for="">Nome</label>
                <input type="text" required="" value="<?php print $obj->no_pizza; ?>" placeholder="" name="item[name]" class="form-control">
                <br>
            </div>
            <div class="form-group  col-lg-12">
                <label for="">Valor</label>
                <input type="text"  required="" value="<?php print $obj->vl_pizza; ?>" placeholder="" name="item[valor]" class="form-control">
                <br>
            </div>
            <div class="form-group  col-lg-12">
                <label for="">Medida</label>
                <select placeholder="" name="item[cd_tamanho]" class="form-control">
                    <?php
                    while ($row = mysqli_fetch_object($medida)) {
                        if ($obj->tb_pizza_medida_cd_tamanho == $row->cd_tamanho) {
                            print "<option value='{$row->cd_tamanho}' selected>{$row->no_tamanho}</option>";
                        } else {
                            print "<option value='{$row->cd_tamanho}'>{$row->no_tamanho}</option>";
                        }
                    }
                    ?>
                </select>
                <br>
            </div>

            <input type="hidden" required="" value="<?php print $obj->cd_pizza; ?>" placeholder="" name="item[cd_pizza]" class="form-control">
            <?php
        }
        ?>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>     
</form>
</div>
