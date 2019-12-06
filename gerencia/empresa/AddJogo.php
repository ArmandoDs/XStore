<?php include "verificarSession.php"; ?>			
<?php include "header.php" ?>
<body>
<div class="cardArea">	
	<?php include "../dal/InsertJogo.php";  ?>
	<h4 class="white">Cadastrar Categoria</h4>
	<form action="" method="post" enctype="multipart/form-data">
	<!-- cadastro do produto com nome,descricao,id usuario,preco,id categoria, foto-->

	<?php
		if(!empty($msg)){
			echo "<div class='uk-alert-danger' uk-alert>
			<a class='uk-alert-close' uk-close></a>
			<p>$msg</p>
		</div>";
		}
		if(!empty($msg2)){
			echo "<div class='uk-alert-danger' uk-alert>
			<a class='uk-alert-close' uk-close></a>
			<p>$msg2</p>
		</div>";
		}
	?>	
		<!--Inserir Nome--> 
		<div class="uk-margin">
			<div class="uk-inline">
				<span class="uk-form-icon" uk-icon="icon: user"></span>
				<input class="uk-input" type="text" name="titulo" placeholder="Nome do Jogo" required="" >
			</div>
		</div>
		<!--Inserir preço--> 
		<div class="uk-margin">
			<div class="uk-inline">
				<span class="uk-form-icon" uk-icon="icon: user"></span>
				<input class="uk-input" type="number" name="preco" placeholder="Preço" required="" >
			</div>
		</div>		

		<!--Inserir descrição--> 
		<div class="uk-margin">
            <textarea class="uk-form-width-large uk-textarea" rows="5"name="descricao" placeholder="Descrição" required=""></textarea>
        </div>

		<!--Código para adicionar as opções de categoria-->	

		<div class="uk-margin">
			<div uk-form-custom="target: > * > span:last-child">
				<select required="" name="id_categoria">
					<option class="white" value="">Selecione o genero</option>
						<?php
						include "../connect.php";
						$sql = "SELECT * FROM categoria";
						$busca = mysqli_query($conexao,$sql);
						while ($array = mysqli_fetch_array($busca)) {
							$id = $array['id'];
							$nome = $array['nome'];
						?>	
							<option value="<?php echo "$id";?>"><p><?php echo "$nome";?></p></option>
						<?php }?>	
				</select>
				<span class="uk-link">
					<span uk-icon="icon: pencil"></span>
					<span></span>
				</span>
			</div>
		</div>


		<!--Inserir requisitos minimos--> 
		<div class="uk-margin">
            <textarea class="uk-form-width-large uk-textarea" rows="5" name="requisitos_min" placeholder="Requisitos minimos" required=""></textarea>
        </div>	
		<!--Inserir requisitos indicados--> 
		<div class="uk-margin">
            <textarea class="uk-form-width-large uk-textarea" rows="5" name="requisitos_inidicados" placeholder="requisitos indicados" required=""></textarea>
        </div>				


		<!--Adicionar imagens--> 
		<div class="uk-margin">
			<div uk-form-custom>
				<input type="file" name="arquivo" required="">
				<button class="uk-button uk-button-default colorFix" type="button" tabindex="-1">Imagem do jogo</button>
			</div>
		</div>
	<button type="submit" class="uk-button uk-button-danger" name="AddJogo">Adicionar jogo</button>
	<div class="inputCampo"><a href="index.php">Voltar</a></div>
	</form>

</div>					
</body>
</html>

