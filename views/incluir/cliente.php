<?php
//$dados = $_REQUEST['item'];
//require 'model/cliente.php';
//$banco = new cliente();
//if (!empty($dados["name"])) {
//    $resut = $banco->inserir($dados);
//    if ($resut == true) {
//        print"<h1>Salvo com Sucesso</h1>";
//    }
//}
?>
<h1>Cadastro de Cliente</h1>
<hr />
<div class="portlet-body">  
    <form action="?p=cli&acao=incluir" method="POST">
        <div class="form-group col-lg-12">
            <label for="">Nome</label>
            <input type="text" required="" value="" placeholder="" name="item[name]" class="form-control">
            <br>
        </div>
        <div class="form-group  col-lg-12">
            <label for="">Telefone</label>
            <input type="tel"  required="" value="" placeholder="" name="item[telefone]" class="form-control">
            <br>
        </div>
        <div class="form-group  col-lg-12"> 
            <label>cpf</label>
            <input type="text" required="" value="" placeholder="" name="item[cpf]" class="form-control">
            <!--<textarea placeholder="" name="item[ds_formecedor]" class="form-control"></textarea>-->
        </div>
        <div class="form-group  col-lg-12">
            <label for="">Endereço</label>
            <textarea required="" value="" placeholder="" name="item[ds_endereco]" class="form-control"></textarea>
            <br>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>     
</form>
</div>
