<?php

include 'config/bd.php';

$stmt = $con->query("select*from usuario");

$cadastrarusuario = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>PipaSoft</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<!--Cadastro de Utilizador -->
<?php

include 'config/bd.php';
if (isset($_POST['nome']))
{
    $nome =$_POST['nome'];
}
if (isset($_POST['email']))
{
    $email =$_POST['email'];
}
if (isset($_POST['senha']))
{
    $senha =$_POST['senha'];
}
if (isset($_POST['datanasc']))
{
    $datanasc =$_POST['datanasc'];
}
if (empty($nome))
{
    $mensagem_erro="Campo nome precisa ser preenchido";
}
else if (empty($email))
{
    $mensagem_erro="Campo email precisa ser preenchido";
}
else if (empty($senha))
{
    $mensagem_erro="Campo password precisa ser preenchido";
}
else if (empty($datanasc))
{
    $mensagem_erro="Campo telefone precisa ser preenchido";
}
else
{
    
$stmt = $con->prepare('Insert into usuario(nome,email,senha,datanasc)values(:nome,:email,:senha,:datanasc)');
$stmt->execute(array(
        ':nome' =>$nome,
        ':email'=>$email,
        ':senha'=>$senha,
        ':datanasc'=>$datanasc,
    ));
}
?>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container ">
<img class="img-fluid logo-dark mb-2" src="assets/img/P7.png" alt="P7">
<div class="col-xl-12 col-sm-12 col-12 mb-4">
    <div class="head-link-set">
    <ul>
     <a class="dropdown-item" href="cadastrarusuario.php"><i data-feather="user" class="mr-1"></i> Cadastrar Usuario</a>
    <a class="dropdown-item" href="listarusuario.php"><i data-feather="settings" class="mr-1"></i> Lista de Usuarios</a>
    <a class="dropdown-item" href="index.php"><i data-feather="log-out" class="mr-1"></i>Painel de Controle </a>
    </ul>
    </div>
    </div>
<div class="loginbox">
<div class="login-left">
<div class="login-left-wrap">
<h1>Cadastro do Usuario</h1>
<p class="account-subtitle">Acesso a nossa Secretaria</p>

<form method="POST" action="#">
<div class="form-group">
<label class="form-control-label" name="nome">Name</label>
<input type="text" name="nome" class="form-control" placeholder="Insira o nome do usuario"
        id="nome">
</div>
<div class="form-group">
<label class="form-control-label"name="email">Email Address</label>
<input type="email" name="email" class="form-control" placeholder="Insira o email do usuario"
        id="amail">
</div>
<div class="form-group">
<label class="form-control-label"name="senha">Senha</label>
<input type="password" name="senha" class="form-control" placeholder="Insira a Senha do usuario"
        id="senha">
</div>
<div class="form-group">
<label class="form-control-label"name="datanasc">Data de Nascimento</label>
<input type="date" name="datanasc" class="form-control" placeholder="Insira a data de nascimento do usuario"
        id="datanasc">
</div>
<div class="form-group mb-0">
<button type=submit class="btn btn-success btn-xl text-center">Entrar</button>
</div>
</form>


</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
