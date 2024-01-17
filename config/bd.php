<?php
$host="localhost";
$db_name="bd";
$username="root";
$password="";
try{
    $con = new PDO("mysql:host={$host};dbname={$db_name}",$username,$password);

    echo "</br>"; 
}
    catch(PDOException $exception){
        echo"</br>Erro de conexão com banco de dados";
    }
    
?>
<br/>