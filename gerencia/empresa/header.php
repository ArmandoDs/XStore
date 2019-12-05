<!DOCTYPE html>
<html>
<head>
    <title>X STORE</title>	 
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/css/uikit.min.css" />
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit-icons.min.js"></script>       
<link rel="stylesheet" type="text/css" href="../css/styleCard.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="../script/script.js"></script>
<meta charset="UTF-8">
<style>
*{
  font-family: 'Play', sans-serif;
}
</style>
</head>


<?php 
	$idUser = ($_SESSION['idUser']);	
	include "../connect.php";
	$sql = "SELECT * FROM usuario WHERE id = '$idUser'";  
	$busca = mysqli_query($conexao,$sql);
	$array = mysqli_fetch_array($busca);
	$nome = $array['nome']; 
	$foto = $array['foto']; 
	$carteira = $array['carteira']; 
	if ($carteira == 0) {
		$carteira = "0.00";
  }
  if ($carteira >= 10000) {
		$carteira = "10000";
	}		
?>
<body>
<div class="corpo">
  <div class="menu">
    <div class="itemMenu center sumir" id="center"><a class="menuLink" id="menuIcon" uk-icon="icon:chevron-double-left"></a></div>
    <div class="iconMenuHide" ><a id="menuIconHide" uk-icon="icon:menu"></a></div>
    <div class="itemMenu" ><a href="index.php" class="menuLink menuIcon" uk-tooltip="Loja" uk-icon="icon: home"></a><a class="menuLink" href="index.php">Loja</a></div>
    <div class="itemMenu" ><a  href="AddJogo.php" class="menuLink menuIcon" uk-tooltip="Adicionar jogos" uk-icon="icon:  plus"></a><a class="menuLink"  href="AddJogo.php">Adicionar jogo</a></div>
    <div class="logout" uk-tooltip="Realizar logout"><a href="session.php" class="menuLink menuIcon" uk-icon="icon: sign-out"></a><a class="menuLink" href="session.php">sair</a></div>
  </div>

  <div class="menuFixo">  
    <div class="menuFixoDiv" uk-tooltip="<?php echo "$nome";?>"><img class="menuFixoImg" src="../uploadUser/<?php echo "$foto";?>"/></div>
  </div>  

  


