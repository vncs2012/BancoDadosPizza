<div class="col-lg-12" >
    <div class="bs-component">
        <div class="navbar navbar-default">
            <div class="container-fluid">

                <!--<div class="navbar-collapse collapse navbar-responsive-collapse">-->
                <ul class="nav nav-pills nav-stacked">
                    <li class="text-info text-center"> Esta Logado com <?php print $_SESSION['no_pessoa']; ?></li>
                    <li class="active"><a href="?p=hom">home</a></li>
                    <li><a href="?p=ped&acao=listar">Pedido</a></li>
                    <li><a href="?p=fun&acao=listar">Funcionario</a></li>
                    <li><a href="?p=cli&acao=listar">Clientes</a></li>
                    <li><a href="?p=ent&acao=listar">Entregador</a></li>
                    <li><a href="?p=med&acao=listar">Tamanho Pizza</a></li>
                    <li><a href="?p=piz&acao=listar">Pizza</a></li>
                    <li><a href="?p=beb&acao=listar">Bebidas</a></li>
                    <li><a href="?p=adc&acao=listar">Adicionais</a></li>
                    <li><a href="login.php?sair=1">Sair</a></li>
                </ul>
                <!--</div>-->
            </div>
        </div>
    </div>
</div>