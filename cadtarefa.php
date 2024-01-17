<?php

include 'config/bd.php';

$stmt = $con->query("select*from trabalho");

$trabalho = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>BACCsoft</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<?php

include 'config/bd.php';
if (isset($_POST['tarefa']))
{
    $tarefa =$_POST['tarefa'];
}
if (isset($_POST['respo']))
{
    $respo =$_POST['respo'];
}
if (isset($_POST['datai']))
{
    $datai =$_POST['datai'];
}
if (isset($_POST['datac']))
{
    $datac =$_POST['datac'];
}
if (empty($tarefa))
{
    $mensagem_erro="Campo tarefa precisa ser preenchido";
}
else if (empty($respo))
{
    $mensagem_erro="Campo resposável precisa ser preenchido";
}
else if (empty($datai))
{
    $mensagem_erro="Campo data de inicio precisa ser preenchido";
}
else if (empty($datac))
{
    $mensagem_erro="Campo data de conclusão precisa ser preenchido";
}

else
{
    
$stmt = $con->prepare('Insert into trabalho(tarefa, respo,datai,datac)values(:tarefa, :respo, :datai,:datac)');
$stmt->execute(array(
        ':tarefa' =>$tarefa,
        ':respo'=>$respo,
        ':datai'=>$datai,
        ':datac'=>$datac,
       
    ));
}
?>

<body>
<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<img class="img-fluid logo-dark mb-2" src="assets/img/P7.png" alt="p7">
<div class="col-xl-12 col-sm-12 col-12 mb-4">
    <div class="head-link-set">
    <ul>
    <a class="dropdown-item" href="cadtarefa.php"><i data-feather="user" class="mr-1"></i> Cadastrar Tarefa</a>
<a class="dropdown-item" href="listartarefa.php"><i data-feather="settings" class="mr-1"></i> Lista de Tarefas</a>
<a class="dropdown-item" href="index.php"><i data-feather="log-out" class="mr-1"></i>Painel de Controle </a>
    </ul>
    </div>
    </div>
<div class="loginbox">
<div class="login-left">
<div class="login-left-wrap">
<h1>Cadastro de Tarefas</h1>
<p class="account-subtitle">Acesso a nossa Secretaria</p>

<form method="POST" action="#">
<div class="form-group">
<label class="form-control-label" name="tarefa">Tarefa</label>
<input type="text" name="tarefa" class="form-control" placeholder="Insira o nome da tarefa"
        id="tarefa">
</div>
<div class="form-group">
<label class="form-control-label" name="respo">Resposável</label>
<input type="text" name="respo" class="form-control" placeholder="Insira o nome do responsável"
        id="respo">
</div>
<div class="form-group">
<label class="form-control-label"name="datai">Data de Inicio</label>
<input type="date" name="datai" class="form-control" placeholder="Insira a data de inicio"
        id="datai">
</div>
<div class="form-group">
<label class="form-control-label"name="datac">Data de Conclusão</label>
<input type="date" name="datac" class="form-control" placeholder="Insira a data de conclusão"
        id="datac">
</div>

<div class="form-group mb-0">
<button type=submit class="btn btn-success btn-xl text-center">Entrar</button>
</div>
</form>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>