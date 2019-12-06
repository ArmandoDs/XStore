<?php 
if(isset($_POST['AddUser'])){
	include "connect.php";
	$nome = ($_POST["nome"]);	
	$login = ($_POST["login"]);	
	$senha = $_POST["senha"];
	$senha2 = $_POST["senha2"];
	if (isset($_POST['empresa'])) {
		$tipo = 1;
	}
	else{
		$tipo = 1;
	}
	if ($senha == $senha2) {
		$sqlLogin = "SELECT COUNT(*) AS contadorNome FROM usuario WHERE nome = '$nome'";	
		$sqlInsertLogin =  mysqli_query($conexao,$sqlLogin);		
		$resultadoLogin = mysqli_fetch_array($sqlInsertLogin);
		$verficadorLogin = $resultadoLogin['contadorNome'];
		if($verficadorLogin < 1) {	
			if(isset($_FILES['arquivo'])){
				$extensao = strtolower(substr($_FILES['arquivo']['name'],-4));
				$novoNome = $_POST["nome"].$extensao;
				$diretorio = "uploadUser/";
				move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novoNome);
			$sql ="INSERT INTO `usuario`(`nome`, `login`, `senha`, `foto`,`carteira`,`tipo`) VALUES ('$nome','$login',md5('$senha'),'$novoNome','0','$tipo')";
			$inserir = mysqli_query($conexao,$sql);
			$msg = "Usuário cadastrado, tente realizar o login";
			}			

		}	
			else{
				$msg = "Login indisponível, tente novamente por favor :(";
			}		
	}
	else{$msg = "Senhas não coicidem :(";}		
}						
?>


<?php include "header.php"; ?> 	
<body>
<div class="LoginDiv">	
	<div class="loginArea">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="logo">X Store</div>
			<?php if(!empty($msg)){ echo "<div class='alert alert-danger' role='alert'>$msg</div>"; }?>	
			<!--Nome-->
			<div class="uk-margin margin-top">
				<div class="uk-inline">
					<span class="uk-form-icon" uk-icon="icon: user"></span>
					<input class="uk-input w-100 myInput" type="text" name="nome"  placeholder="Nome do usuário" require="">
				</div>
			</div>	
			<!--end of Nome-->	

			<!--login-->
			<div class="uk-margin margin-top">
				<div class="uk-inline">
					<span class="uk-form-icon" uk-icon="icon: user"></span>
					<input class="uk-input w-100 myInput" type="text" name="login"  placeholder="Login" require="">
				</div>
			</div>	
			<!--end of login-->	
			
			<!--senha-->
			<div class="uk-margin margin-top">
				<div class="uk-inline">
					<span class="uk-form-icon" uk-icon="icon: user"></span>
					<input class="uk-input w-100 myInput" type="password" name="senha"  placeholder="Senha" require="">
				</div>
			</div>	
			<!--end of senha-->	
		
			<!--senha2-->
			<div class="uk-margin margin-top">
				<div class="uk-inline">
					<span class="uk-form-icon" uk-icon="icon: user"></span>
					<input class="uk-input w-100 myInput" type="password" name="senha2"  placeholder="Digite novamente a senha" require="">
				</div>
			</div>	
			<!--end of senha2-->

			<!--Imagem-->

			<div class="uk-margin margin-top">
				<input type="file" class="uk-input w-100 myInput" name="arquivo" required="">
			</div>	

			<!--end of imagem-->

			<!--Tipo do usuario-->
			<!--Tipo do usuario-->	
			
			<!--botao cadastro-->
			<button type="submit" name="AddUser" class="uk-button myBtn">Cadastrar</button> 
			<hr class="uk-divider-icon">
			<!--botao voltar-->
			<div class="margin-bot"><a class="uk-button myBtn" href="login.php">Voltar</a></div>
		</form>	
	</div>
</div>			