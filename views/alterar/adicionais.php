<h1>Alterar Pizza</h1>
<hr />
<div class="portlet-body"> 
    <form action="?p=adc&acao=alterar" method="POST">
        <?php
        while ($obj = mysqli_fetch_object($listarUm)) {
            ?>
            <div class="form-group col-lg-12">
                <label for="">Nome</label>
                <input type="text" required="" value="<?php print $obj->no_adicionais; ?>" placeholder="" name="item[name]" class="form-control">
                <br>
            </div>
            <div class="form-group  col-lg-12">
                <label for="">Valor</label>
                <input type="text"  required="" value="<?php print $obj->vl_adicionais; ?>" placeholder="" name="item[valor]" class="form-control">
                <br>
            </div>
      

            <input type="hidden" required="" value="<?php print $obj->cd_adicionais; ?>" placeholder="" name="item[cd_adicionais]" class="form-control">
            <?php
        }
        ?>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>     
</form>
</div>
