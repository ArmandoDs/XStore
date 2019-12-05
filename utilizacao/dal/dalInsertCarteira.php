<?php
if(isset($_POST['AddRecarga'])){
	include "../connect.php";
	$valor = ($_POST["valor"]);	
	$idUser = $_SESSION['idUser'];
	/*Verificar o limite da recarga*/
	$sql = "SELECT * FROM usuario WHERE id = '$idUser'";  
	$busca = mysqli_query($conexao,$sql);
	$array = mysqli_fetch_array($busca);
	$nome = $array['nome']; 
	$foto = $array['foto']; 
	$carteira = $array['carteira']; 
	if ($carteira + $valor >= 10000){
		$msgErro1 = "Não foi possivel realizar a recarga pois o limete da sua carteira é 10000";	
	}
	elseif($valor < 0 ){
		$msgErro1 = "O valor da recarga não pode ser negativo :) ";
	}
	else{
		$sql = "UPDATE `usuario` SET `carteira` = `carteira`+'$valor' WHERE `usuario`.`id` = $idUser";
		$sqlUpdate =  mysqli_query($conexao,$sql);
		header('Refresh:3');
		$msg = "Recarga realizada com sucesso :) ";	
	}
	/*fim da verificação*/  							
}	
?>
