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
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="../owlcarousel/assets/owl.theme.default.min.css">
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
    <div class="itemMenu" ><a href="/user" class="menuLink menuIcon" uk-tooltip="Loja" uk-icon="icon: home"></a><a class="menuLink" href="index.php">Loja</a></div>
    <div class="itemMenu"><a class="menuLink menuIcon" href="insertCarteira.php" uk-tooltip="Realizar recarga" uk-icon="icon: credit-card"></a><a class="menuLink" href="insertCarteira.php">Recarga</a></div>
    <div class="logout" uk-tooltip="Realizar logout"><a href="session.php" class="menuLink menuIcon" uk-icon="icon: sign-out"></a><a class="menuLink" href="session.php">sair</a></div>
  </div>

  <div class="menuFixo">
    <div class="menuFixoDiv">
      <div class="uk-inline">
        <button class="uk-button uk-button-text white" type="button">$<?php echo "$carteira";?></button>
        <div uk-dropdown="mode: click;pos: left-bottom;">
        <button class="uk-button uk-button-text" id="flip">Recaregar carteira</button>
        <hr class="uk-divider-icon">
        <!--recaregar carteira-->
          <?php include "../dal/dalInsertCarteira.php";  ?>       
          <form action="" method="post" id="panel">
          <!-- recarga-->

          <!--Inserir valor--> 
          <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: credit-card"></span>
            <input class="uk-input" name="valor" placeholder="Valor da recarga" required="" type="number">
        </div>
          <div class="inputCampo"><button type="submit" class="uk-button uk-button-small uk-button-danger" name="AddRecarga">Realizar recarga</button></div> 
          </form>

        <!--end of recaregar carteira-->
        </div>
      </div>
    </div>
    <div class="menuFixoDiv" uk-tooltip="<?php echo "$nome";?>"><img class="menuFixoImg" src="../uploadUser/<?php echo "$foto";?>"/></div>
  </div>  

  


