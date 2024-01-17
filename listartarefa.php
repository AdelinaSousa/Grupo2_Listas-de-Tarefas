<!--listar Utilizador -->
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
<title>LISTA DE TAREFA</title>

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
   
    <a class="dropdown-item" href="cadtarefa.php"><i data-feather="user" class="mr-1"></i> Cadastrar Tarefa</a>
<a class="dropdown-item" href="listartarefa.php"><i data-feather="settings" class="mr-1"></i> Lista de Tarefas</a>
<a class="dropdown-item" href="index.php"><i data-feather="log-out" class="mr-1"></i>Painel de Controle </a>
    
    </ul>
    </div>
    </div>
    <div class="col-xl-12 col-sm-12 col-12 mb-4">
    <div class="row">
    <div class="col-xl-12 col-sm-12 col-12">
    <div class="card ">
    <div class="card-header">
    <h2 class="card-titles"> Lista de Tarefas Guardadas</h2>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-success table-striped">
          <thead>
            <tr>
              <th>Projecto </th>
              <th>Responsável Pelo Projecto</th>
              <th>Data de Inicio do Projecto</th>
              <th>Data de Conclusão do Projecto</th>
            </tr>
          </thead>
          <tbody>
          <?php

foreach($trabalho as $trabalho )
{   
?>
            <tr>
                <td><?php echo $trabalho ['tarefa']?></td>
                <td><?php echo $trabalho ['respo']?></td>
                <td><?php echo $trabalho ['datai']?></td>
                <td><?php echo $trabalho ['datac']?></td>
                
                


                <td>
                <div class="row">
                       <form action="alterartarefa.php" method="GET">
                         <input type="hidden" name="id" value="<?=$trabalho['id']?>">
                         <button type="submit" class="btn btn-success btn-sm">Alterar</button> 
                        </form> 
                
                        <form action="eliminartarefa.php" method="GET">
                         <input type="hidden" name="id" value="<?=$trabalho['id']?>">
                         <button type="submit" class="btn btn-danger btn-sm">Eliminar</button> 
                        </form> 
                       
                </div> 
                      </td>
         
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