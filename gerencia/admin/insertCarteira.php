<?php include "verificarSession.php"; ?>	
<?php include "header.php" ?>

<body>
	<div class="container">
		<div class="back">	
			<div class="areaCadastro">
				<div class="imagemCadastro"></div>
					<div class="inputCadastro">		
							<?php include "../dal/dalInsertCarteira.php";  ?>

							<form action="" method="post">
							<!-- cadastro do produto com nome,descricao,id usuario,preco,id categoria, foto-->

							<!--Inserir Nome--> 
							<div class="inputCampo"><input type="text" name="valor" placeholder="Valor da recarga" required="" ></div>
							<?php
								if(!empty($msg)){
									echo "$msg";
								}
							?>
							<div class="inputCampo"><button type="submit" class="btnLogin" name="AddRecarga"><p>Realizar recarga</p></button></div> 
							<div class="inputCampo"><a href="index.php">Voltar</a></div>
							</form>

				</div>					
			</div>	
		</div>
	</div>					
</body>
</html>
