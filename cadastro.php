<?php 
if(isset($_POST['AddUser'])){
	include "connect.php";
	$nome = ($_POST["nome"]);	
	$login = ($_POST["login"]);	
	$senha = $_POST["senha"];
	$senha2 = $_POST["senha2"];
	$sqlLogin = "SELECT COUNT(*) AS contadorNome FROM usuario WHERE nome = '$nome'";	
	$sqlInsertLogin =  mysqli_query($conexao,$sqlLogin);		
	$resultadoLogin = mysqli_fetch_array($sqlInsertLogin);
	$verficadorLogin = $resultadoLogin['contadorNome'];
	if ($senha == $senha2) {
		if ($verficadorLogin < 1) {		
			if(isset($_FILES['arquivo'])){
				$extensao = strtolower(substr($_FILES['arquivo']['name'],-4));
				$novoNome = $_POST["nome"].$extensao;
				$diretorio = "uploadUser/";
				move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novoNome);
			$sql ="INSERT INTO `usuario`(`nome`, `login`, `senha`, `foto`,`carteira`) VALUES ('$nome','$login',md5('$senha'),'$novoNome','0')";
			$inserir = mysqli_query($conexao,$sql);	
			echo "Usuário cadastrado, tente realizar o login";
			echo "$senha";
			echo "$senha2";	
			}			

		}	
			else{
				$msg = "Login indisponível, tente novamente por favor :(";
			}		
	}
	else{$msg = "Senhas não coicidem :(";}		
}						
?>


<?php include "header.php";?>
<body style="background-image:url(oi.jpg); background-size:cover;">
<div class="modal-dialog text-center">
	<div class="col-sm-9 main section">	
		<div class="modal-content">
			<div class="col-12 form-input">
				<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group PaddingTop">
				<!-- cadastro do produto com nome,descricao,id usuario,preco,id categoria, foto-->
				<?php
					if(!empty($msg)){
						echo "<div class='alert alert-danger' role='alert'>$msg</div>";
					}
				?>
				<!--Inserir Nome-->
				<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">@</span>
				</div>
				<input type="text" class="form-control" name="nome"  placeholder="Nome do usuário" aria-label="Username" aria-describedby="basic-addon1">
				</div>		

				<!--Inserir login--> 
				<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">@</span>
				</div>
				<input type="text" class="form-control" name="login"  placeholder="Digite o login" aria-label="Username" aria-describedby="basic-addon1">
				</div>	

				<!--Inserir senha--> 
				<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">@</span>
				</div>
				<input type="password"class="form-control" name="senha" placeholder="Digite sua senha" aria-label="Username" aria-describedby="basic-addon1">
				</div>	
				
				<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">@</span>
				</div>
				<input type="password"class="form-control" name="senha2"  placeholder="Digite novamente sua senha" aria-label="Username" aria-describedby="basic-addon1">
				</div>					

				<!--Adicionar imagens--> 
				<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">@</span>
				</div>
				<input type="file" class="form-control" name="arquivo" aria-label="Username" aria-describedby="basic-addon1">
				</div>				

				<button type="submit" name="AddUser" class="btn btn-outline-primary btn-block">Cadastrar</button> 

				<button class="btn btn-outline-primary btn-block"><a href="login.php">Voltar</a></button>
				</div>	
				</form>  
			</div>	
		</div>
	</div>
</div>		
