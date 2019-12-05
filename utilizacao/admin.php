
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/styleLogin.css">	
</head>
<body>
<div class="gridLogin">
	<div class="imagem">
	<?php 	
	include "../connect.php";
	$sql = "SELECT * FROM `jogo` ORDER by numero_vendas DESC LIMIT 1";

  	$busca = mysqli_query($conexao,$sql);
  	while ($array = mysqli_fetch_array($busca)) {
	$titulo = $array['titulo'];	  
	$foto = $array['foto']; 	
	?>
	<img class="loginImage"src="upload/<?php echo "$foto";?>">
	  <?php } ?>
	</div>
	<div class="menuLogin">	
		<?php 
			include "verificarLogin.php";
		?>
		<div class="erro">
		<?php 
		//verifica se ocorreu algum erro
		if(!empty($erros)){
			//lista os erros
			foreach ($erros as $erro) {
				echo $erro;
			}
			//fim da listagem
		}
		//fim da verificação
		?>
		</div>
		<!--Sistema de login-->
		<form action="" method="post">
			<!-- login do usuario-->
			<div class="inputDiv"><input type="text" name="login" class="inputLogin" placeholder="login" ></div>
			<!-- senha do usuario-->
			<div class="inputDiv"><input type="password" class="inputLogin" name="senha" placeholder="senha"></div>
			<!--botao para realizar login-->
			<div class="buttonDiv"><button type="submit" name="btnLogin" class="btnLogin"><p>Entrar</p></button></div> 
			<div class="orDiv"><p class="or">ou</p></div>			
			<div class="buttonDiv"><button class=""><a href="cadastro.php">Cadastre-se</a></button></div>
		<!--Fim do sistema de login-->
		</form>
	</div>	

</div>
</body>
</html>