<?php
if(isset($_POST['AddJogo'])){
	include "../connect.php";
	$titulo = ($_POST["titulo"]);	
	$descricao = ($_POST["descricao"]);	
	$id_categoria = $_POST["id_categoria"];
	$requisitos_min = $_POST["requisitos_min"];
	$requisitos_inidicados = $_POST["requisitos_inidicados"];	
	$preco = $_POST["preco"];
	$id_usuario = $_SESSION['idUser'];	
	$foto = $_POST["preco"];							



	$sql = "SELECT COUNT(*) AS contador FROM jogo WHERE titulo = '$titulo'";
	$sqlInsert =  mysqli_query($conexao,$sql);	
	$resultadoInsert = mysqli_fetch_array($sqlInsert);
	$verficadorInsert = $resultadoInsert['contador'];	
	if ($verficadorInsert < 1) {

		if(isset($_FILES['arquivo'])){
			$tmpName = $_FILES['arquivo']['tmp_name'];
			list($width, $height, $type, $attr) = getimagesize($tmpName);
			if($height != 720){
				$msg = "Verifique as dimensões da imagem :)";
			}
			else{
				$extensao = strtolower(substr($_FILES['arquivo']['name'],-4));
				$novoNome = $_POST["titulo"].$extensao;
				$diretorio = "../upload/";
				move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novoNome);
				$sql ="INSERT INTO `jogo`(`titulo`, `descricao`, `id_categoria`, `requisitos_min`, `requisitos_inidicados`, `preco`, `id_usuario`, `numero_vendas`, `foto`, `likes`, `deslikes`) VALUES ('$titulo', '$descricao', $id_categoria, '$requisitos_min', '$requisitos_inidicados', '$preco', '$id_usuario', 0, '$novoNome', 0, 0)";
				$msg = "Jogo adicionado";
			}
		}	



	$inserir = mysqli_query($conexao,$sql);	
	}
	else{
		$msg = "titulo indisponivel,Já exite um outro jogo cadastrado com esse mesmo titulo :(";
	}
}		
?>
