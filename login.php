<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8" />
        <title>Login - Sistema PizChar</title>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"rel="stylesheet" type="text/css" />
        <link href="css/login.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/material.css" rel="stylesheet">
    </head>
    <?php
    if (isset($_REQUEST['sair'])) {
        unset($_SESSION['cd_pessoa']);
        unset($_SESSION['no_pessoa']);
        session_destroy();
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">Sistema PizChar</h1>
                <div class="account-wall">
                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                         alt="">
                    <form class="form-signin" action="validacaoLogin.php" method="post">
                        <input name="login" type="text" class="form-control" placeholder="Login" required autofocus>
                        <input  name="senha" type="password" class="form-control" placeholder="Senha" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign in</button>
                    </form>
                </div>
                <a href="#" class="text-center new-account"><?php print date("Y"); ?> &copy;  Banco</a>
            </div>
        </div>
    </div>
    <div class="copyright"></div>
    <script>
        jQuery(document).ready(function () {
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            QuickSidebar.init() // init quick sidebar
            Login.init();
        });
    </script>
</body>
</html>
