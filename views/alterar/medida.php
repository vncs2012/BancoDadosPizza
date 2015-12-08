<h1>Alterar Cliente</h1>
<hr />
<div class="portlet-body"> 
    <form action="?p=fun&acao=alterar" method="POST">
        <?php
        while ($obj = mysqli_fetch_object($listarUm)) {
            ?>
            <div class="form-group col-lg-12">
                <label for="">Nome</label>
                <input type="text" required="" value="<?php print $obj->no_funcionario; ?>" placeholder="" name="item[name]" class="form-control">
                <br>
            </div>
            <div class="form-group  col-lg-12">
                <label for="">Telefone</label>
                <input type="tel"  required="" value="<?php print $obj->login; ?>" placeholder="" name="item[login]" class="form-control">
                <br>
            </div>
            <div class="form-group  col-lg-12"> 
                <label>Senha</label>
                <input type="password" required="" value="<?php print $obj->senha; ?>" placeholder="" name="item[senha]" class="form-control">
                <!--<textarea placeholder="" name="item[ds_formecedor]" class="form-control"></textarea>-->
            </div>

            <input type="hidden" required="" value="<?php print $obj->cd_funcionario; ?>" placeholder="" name="item[cd_funcionario]" class="form-control">
            <?php
        }
        ?>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>     
</form>
</div>
