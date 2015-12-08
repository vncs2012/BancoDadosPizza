<h1>Alterar Cliente</h1>
<hr />
<div class="portlet-body"> 
    <form action="?p=ent&acao=alterar" method="POST">
        <?php
        while ($obj = mysqli_fetch_object($listarUm)) {
            ?>
            <div class="form-group col-lg-12">
                <label for="">Nome</label>
                <input type="text" required="" value="<?php print $obj->no_entregador; ?>" placeholder="" name="item[name]" class="form-control">
                <br>
            </div>
        
            <input type="hidden" required="" value="<?php print $obj->cd_entregador; ?>" placeholder="" name="item[cd_funcionario]" class="form-control">
            <?php
        }
        ?>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>     
</form>
</div>
