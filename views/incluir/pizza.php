<?php
var_dump($medida);
?>
<h1>Cadastro de Funcionarios</h1>
<hr />
<div class="portlet-body">  
    <form action="?p=piz&acao=incluir" method="POST">
        <div class="form-group col-lg-12">
            <label for="">Pizza</label>
            <input type="text" required="" value="" placeholder="" name="item[name]" class="form-control">
            <br>
        </div>
        <div class="form-group  col-lg-12">
            <label for="">Valor</label>
            <input type="text"  required="" value="" placeholder="" name="item[valor]" class="form-control">
            <br>
        </div>
        <div class="form-group  col-lg-12">
            <label for="">Medida</label>
            <select placeholder="" name="item[cd_tamanho]" class="form-control">
                <?php
                while ($row = mysqli_fetch_object($medida)) {

                    print "<option value='{$row->cd_tamanho}'>{$row->no_tamanho}</option>";
                }
                ?>
            </select>
            <br>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>     
</form>
</div>
