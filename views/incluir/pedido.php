<h1>Cadastro de Bebida</h1>
<hr />
<div class="portlet-body">  
    <form action="?p=ped&acao=incluir" method="POST">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="col-md-12">
                <div class="col-md-6">
                    <label for="">Selecione o Cliente</label>
                    <select id="select222" name="cli[cd_cliente]" class="form-control" required="Selecione um cliente">
                        <option></option>
                        <?php
                        while ($row = mysqli_fetch_object($cliente)) {
                            print "<option value='{$row->cd_cliente}'>{$row->no_cliente}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <a href="?p=cli&acao=formIncluir"><button class="btn btn-default"  type="button">Novo Cliente<div class="ripple-wrapper"></div></button></a>
                </div>
            </div>
            <div class="col-md-12">
                <label for="">Selecione a Pizza</label>
                <select id="select222" multiple="" name="pizza[]" class="form-control">
                    <?php
                    while ($row = mysqli_fetch_object($pizza)) {
                        print "<option value='{$row->cd_pizza}'>{$row->no_pizza}-{$row->no_tamanho}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-12">
                <label for="">Adicional Pizza</label>
                <select id="select222" multiple="" name="adc[]" class="form-control">
                    <?php
                    while ($row = mysqli_fetch_object($adc)) {
                        print "<option value='{$row->cd_adicionais}'>{$row->no_adicional}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-12">
                <label for="">Bebida</label>
                <select id="select222" multiple="" name="bebida[]" class="form-control">
                    <?php
                    while ($row = mysqli_fetch_object($bebida)) {
                        print "<option value='{$row->cd_bebida}'>{$row->no_bebida}</option>";
                    }
                    ?>
                </select>
            </div>
            <button class="btn btn-primary right" style="margin-left: 85%" type="submit">Salvar</button>
        </div>
    </form>     
</form>
</div>
