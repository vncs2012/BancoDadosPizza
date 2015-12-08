<h1>Alterar Cliente</h1>
<hr />
<div class="portlet-body"> 
    <form action="?p=cli&acao=alterar" method="POST">
        <?php
        while ($obj = mysqli_fetch_object($listarUm)) {
            ?>
            <div class="form-group col-lg-12">
                <label for="">Nome</label>
                <input type="text" required="" value="<?php print $obj->no_cliente; ?>" placeholder="" name="item[name]" class="form-control">
                <br>
            </div>
            <div class="form-group  col-lg-12">
                <label for="">Telefone</label>
                <input type="tel"  required="" value="<?php print $obj->nu_telefone; ?>" placeholder="" name="item[telefone]" class="form-control">
                <br>
            </div>
            <div class="form-group  col-lg-12"> 
                <label>cpf</label>
                <input type="text" required="" value="<?php print $obj->cpf; ?>" placeholder="" name="item[cpf]" class="form-control">
                <!--<textarea placeholder="" name="item[ds_formecedor]" class="form-control"></textarea>-->
            </div>

            <div class="form-group  col-lg-12">
                <label for="">Endereço</label>
                <textarea required="" value="" placeholder="" name="item[ds_endereco]" class="form-control"><?php print $obj->ds_endereco; ?></textarea>
                <br>
            </div>
            <input type="hidden" required="" value="<?php print $obj->cd_cliente; ?>" placeholder="" name="item[cd_cliente]" class="form-control">
            <?php
        }
        ?>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>     
</form>
</div>
