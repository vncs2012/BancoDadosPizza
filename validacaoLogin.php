<?php
session_start();
?>
<meta charset="utf-8" />
<?php
$conexao = new mysqli('localhost', 'root', '@ipe789@', 'pizza');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$login = $_REQUEST ['login'];
$senha = $_REQUEST ['senha'];

$consulta = ("SELECT * FROM `tb_funcionario` where login ='{$login}' and senha = '{$senha}'");
$resutado = $conexao->query($consulta);
while ($row = mysqli_fetch_object($resutado)) {
    $cd = $row->cd_funcionario;
    $no = $row->no_funcionario;
}
if (isset($cd)) {
    $_SESSION['cd_pessoa'] = $cd;
    $_SESSION['no_pessoa'] = $no;

    print $_SESSION['no_pessoa'];
    header("Location:index.php");
    exit();
} else {
//    alerta("ATENÇÃO! Usuário ou Senha inválida.");
    voltar();
    exit();
}
?>