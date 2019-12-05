<?php
$idJogo = $_GET['idJogo']; 
  include "../connect.php";
  $sql = "delete from jogo where id = '$idJogo'";
  $sqlDelete =  mysqli_query($conexao,$sql);
  $msg ="Jogo excluido com sucesso";
  header('Location: ../admin/');
  
?>