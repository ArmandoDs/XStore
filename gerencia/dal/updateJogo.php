<?php
if(isset($_POST['updateJogo'])){
	include "../connect.php";
	$id_jogo = ($_POST["id_jogo"]);	
	$descricao = ($_POST["descricao"]);	
	$id_categoria = $_POST["id_categoria"];
	$preco = $_POST["preco"];						
        $sql ="UPDATE `jogo` SET  `descricao` = '$descricao', `id_categoria` = '$id_categoria', `preco`= '$preco' WHERE `id` = '$id_jogo' ";
        $inserir = mysqli_query($conexao,$sql);
        $msg = "Informações atualizadas";
        header('location: /xstore/gerencia/empresa');	
}		
?>
