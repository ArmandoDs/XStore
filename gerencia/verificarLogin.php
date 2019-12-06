<?php
//chama arquivo de conexão com o banco de dados	
	include "connect.php";
// inicia a sessão
	session_start();
//Verificações
	if(isset($_POST['btnLogin'])){
		$erros = array();
		$login =  ($_POST['login']);
		$senha =  ($_POST['senha']);

		//Variaveis de verificação de login
		$sql = "SELECT COUNT(*) AS contador FROM usuario WHERE login = '$login' AND senha =  md5('$senha')";
		$sqlLogin =  mysqli_query($conexao,$sql);	
		$resultadoLogin = mysqli_fetch_array($sqlLogin);
		$verficadorLogin = $resultadoLogin['contador'];
		//Variaveis de verificação de senha
		
	//Verifica se campo login esta vazio 	
		if(empty($login)){
			$erros[] = "<p>Não se esqueça de preencher o campo login :)</p>";
		}	 
			elseif(empty($senha)){
				$erros[] = "<p>Não se esqueça de preencher o campo senha :)</p>";				
			}		
			elseif($verficadorLogin < 1){
				$erros[] = "<p>Usuário ou senha incorreto :(</p>";
			}
			elseif (empty($erros)){
				$sql = "SELECT * FROM `usuario` WHERE senha = md5('$senha') AND login = '$login'";
 				$busca = mysqli_query($conexao,$sql);
 				$verificador = mysqli_fetch_array($busca);			
 				$_SESSION['tipo'] = $verificador['tipo'];			
				if ($_SESSION['tipo'] == 2) {
					$_SESSION['idUser'] = $verificador['id'];					
				   $_SESSION['login'] = $login;					
					header('Location: empresa');
				}
				elseif ($_SESSION['tipo'] == 1911) {
					$_SESSION['idUser'] = $verificador['id'];					
				   $_SESSION['login'] = $login;					
					header('Location: admin');
				}	
				else{
					$erros[] = "<p>Usuário ou senha incorreto :(</p>"; 	
				}			
			}

	}
			
//Fim das verificações	

 ?>
