<!--listar Utilizador -->
<?php

include 'config/bd.php';

$stmt = $con->query("select*from usuario");

$cadastrarusuario = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
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
  <img class="img-fluid logo-dark mb-2" src="assets/img/p7.png" alt="p7">
 

 
  <div class="col-xl-12 col-sm-12 col-12 mb-4">
    <div class="head-link-set">
    <ul>
    <a class="dropdown-item" href="cadastrarusuario.php"><i data-feather="user" class="mr-1"></i> Cadastrar Usuario</a>
<a class="dropdown-item" href="listarusuario.php"><i data-feather="settings" class="mr-1"></i> Lista de Usuarios</a>
<a class="dropdown-item" href="index.php"><i data-feather="log-out" class="mr-1"></i>Painel de Controle </a>
    
    </ul>
    </div>
    </div>
    <div class="col-xl-12 col-sm-12 col-12 mb-4">
    <div class="row">
    <div class="col-xl-12 col-sm-12 col-12">
    <div class="card ">
    <div class="card-header">
    <h2 class="card-titles"> Lista dos Usuarios Cadastrados</h2>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-success table-striped ">
          <thead>
            <tr>
              <th>Nome </th>
              <th>amail</th>
              <th>Senha</th>
              <th>Data de Nascimento</th>
             
            </tr>
          </thead>
          <tbody>
          <?php

foreach($cadastrarusuario as $cadastrarusuario)
{   
?>
            <tr>
                <td><?php echo $cadastrarusuario['nome']?></td>
                <td><?php echo $cadastrarusuario['email']?></td>
                <td><?php echo $cadastrarusuario['senha']?></td>
                <td><?php echo $cadastrarusuario['datanasc']?></td>
                
               
                      
         
              </tr>
    
              </tbody>
<?php  
}
?>
    

          </tbody>
        </table>
        
      </div>
      
      

     <script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>