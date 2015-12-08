
<html>
    <head>
        <title>Trabalho Final</title>
        <link href="css/material.css" rel="stylesheet" >
        <link href="css/bootstrap.css" rel="stylesheet" >

    </head>
    <body>

        <div class="container-fluid">

            <?php
            require 'BD.php';
            print'<div class="col-lg-4" >';
            include 'menu.php';
            print'</div><div class="col-lg-8" >';
            include 'controlador.php';
            print'</div>';
            ?>
        </div>
        <script src="js/jquery.mask.js"></script>
    </body>
</html>