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
<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="../script/script.js"></script>
<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

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
?>



<div class="menu">
  <div class="itemDiv">
    <div class="itemMenu"><a href="index.php">Loja</a></div>
    <div class="itemMenu" href="AddJogo.php"><a>Adicionar jogo</a></div>
    <div class="itemMenu" href="insertCarteira.php"><a>Recarga</a></div>
  </div> 
  <div class="itemMenu"><img src="../uploadUser/<?php echo "$foto";?>"  width="25" height="25" class="d-inline-block align-top" ></div>
  <div class="itemMenu">
  <div class="uk-inline">
    <button class="uk-button uk-button-danger" type="button">$<?php echo "$carteira";?>	</button>
        <div uk-dropdown="mode: click">
        <?php include "../dal/dalInsertCarteira.php";  ?>
                <form action="" method="post">
                <div class="form-group">
                <?php
                if(!empty($msg)){
                echo  "<div class='alert alert-danger' role='alert'>$msg</div>";
                }
                ?>
                <label for="exampleInputEmail1">Realizar recarga</label>
                <input type="text" class="form-control" name="valor" placeholder="Valor da recarga" required="" >
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

                <button type="submit" class="btn btn-primary" name="AddRecarga">Realizar recarga</button>    
                </div>
                </div>


                </div>
                </div>


                <a href="session.php" class="btn btn-secondary my-2 my-sm-0">sair</a>

                </form>
        </div>
  </div>
  </div>
</div>










<nav class="navbar navbar-expand-lg navbar-dark bg-g">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

	
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Loja <span class="sr-only">(current)</span></a>
	  </li>
	 
      <li class="nav-item active">
        <a class="nav-link" href="AddJogo.php">Adicionar jogo <span class="sr-only">(current)</span></a>
	  </li>
      <li class="nav-item active">
        <a class="nav-link" href="insertCarteira.php">Recarga<span class="sr-only">(current)</span></a>
	  </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">			

    <div class="dropdown dropleft">
        <button class="btn btn-outline-light my-2 my-sm-0 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="../uploadUser/<?php echo "$foto";?>"  width="25" height="25" class="d-inline-block align-top" >
			$<?php echo "$carteira";?>	 
		</a>	
        </button>
        <div class="dropdown-menu p-4 text-muted" style="max-width: 400px;">

        <?php include "../dal/dalInsertCarteira.php";  ?>
        <form action="" method="post">
        <div class="form-group">
        <?php
          if(!empty($msg)){
            echo  "<div class='alert alert-danger' role='alert'>$msg</div>";
          }
        ?>
        <label for="exampleInputEmail1">Realizar recarga</label>
        <input type="text" class="form-control" name="valor" placeholder="Valor da recarga" required="" >
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

        <button type="submit" class="btn btn-primary" name="AddRecarga">Realizar recarga</button>    
        </div>
        </div>


        </div>
    </div>


    <a href="session.php" class="btn btn-secondary my-2 my-sm-0">sair</a>

    </form>
  </div>
</nav>
</div>