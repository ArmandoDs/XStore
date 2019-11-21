<?php include "header.php"; ?> 	
<body>
<div class="LoginDiv">	
	<div class="loginArea">
		<form action="" method="post">
			<div class="logo">X Store</div>
					<?php 
					include "verificarLogin.php";
					?>
					<?php 
					//verifica se ocorreu algum erro
					if(!empty($erros)){
					//lista os erros
					foreach ($erros as $erro) {
					echo "<div class='uk-alert-primary' uk-alert><a class='uk-alert-close' uk-close></a><p>$erro</p></div>";
					}
					//fim da listagem
					}
					//fim da verificação
					?>	
			<!-- login do usuario-->
			<div class="uk-margin margin-top">
				<div class="uk-inline">
					<span class="uk-form-icon" uk-icon="icon: user"></span>
					<input class="uk-input w-100 myInput" name="login" placeholder="Login" type="text">
				</div>
			</div>
			<div class="uk-margin margin-top">
				<div class="uk-inline">
					<span class="uk-form-icon" uk-icon="icon: lock"></span>
					<input class="uk-input  w-100 myInput" name="senha" placeholder="senha" type="password">
				</div>
			</div>
						
			<!--botao para realizar login-->
			<button type="submit" name="btnLogin" class="uk-button myBtn">Entrar</button>
		
			<hr class="uk-divider-icon">
			<div class="margin-bot"><a type="submit" href="cadastro.php" class="uk-button myBtn">Cadastre-se</a></div>
			<!--Fim do sistema de login-->
		</form>
	</div>
</div>
</body>
</html>