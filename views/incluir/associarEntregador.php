<?php
var_dump($medida);
?>
<h1>Cadastro de Funcionarios</h1>
<hr />
<div class="portlet-body">  
    <form action="?p=ped&acao=assoc" method="POST">

        <input type="hidden"  required="" value="<?php print $_REQUEST['id'] ?>" placeholder="" name="id" class="form-control">

        <div class="form-group  col-lg-12">
            <label for="">Entregador</label>
            <select placeholder="" name="cd_entregador" class="form-control">
                <option></option>
                <?php
                while ($row = mysqli_fetch_object($assoc)) {

                    print "<option value='{$row->cd_entragador}'>{$row->no_entregador}</option>";
                }
                ?>
            </select>
            <br>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>     
</form>
</div>
