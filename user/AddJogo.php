<?php include "verificarSession.php"; ?>			
<?php include "header.php" ?>
<body>
<div class="cardArea">	
	<div class="grid">
		<div class="back">	
			<div class="areaCadastro">
				<div class="imagemCadastro"></div>
					<div class="inputCadastro">		
							<?php include "../dal/insertJogo.php";  ?>

							<form action="" method="post" enctype="multipart/form-data">
							<!-- cadastro do produto com nome,descricao,id usuario,preco,id categoria, foto-->

							<!--Inserir Nome--> 
							<div class="inputCampo"><input type="text" name="titulo" placeholder="Nome do Jogo" required="" ></div>
							<?php
								if(!empty($msg)){
									echo "$msg<br/>";
								}
								if(!empty($msg2)){
									echo "$msg2";
								}
							?>
							<!--Inserir descição--> 
							<div class="inputCampo"><input type="text" name="descricao" placeholder="descricao" required="" ></div>	
							<!--Código para adicionar as opções de categoria-->	

							<div class="inputCampo"><select name="id_categoria">
								<?php
								include "../connect.php";
								$sql = "SELECT * FROM Categoria";
								$busca = mysqli_query($conexao,$sql);
								while ($array = mysqli_fetch_array($busca)) {
									$id = $array['id'];
									$nome = $array['nome'];
								?>	
									<option value="<?php echo "$id";?>"><p><?php echo "$nome";?></p></option>
								<?php }?>	
								</select>
								</div>		
							<!--fim-->  


							<!--Inserir Preço--> 
							<div class="inputCampo"><input type="text" name="requisitos_min" placeholder="requisitos_min" class="" required="" ></div>
							<!--Inserir Preço--> 
							<div class="inputCampo"><input type="text" name="requisitos_inidicados" placeholder="requisitos_inidicados" required="" ></div>

							<!--Inserir Preço--> 
							<div class="inputCampo"><input type="number" name="preco" placeholder="preco" required="" ></div>

							<!--Adicionar imagens--> 
							<div class="inputCampo"><input type="file" name="arquivo" required=""></div>

							<div class="inputCampo"><button type="submit" class="btnLogin" name="AddJogo"><p>Adicionar jogo</p></button></div> 
							<div class="inputCampo"><a href="index.php">Voltar</a></div>
							</form>

				</div>					
			</div>	
		</div>
	</div>	
</div>					
</body>
</html>

