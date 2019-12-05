<?php 
  $idJogo = $_GET['idJogo']; 
  include "../connect.php";
  $sql = "SELECT c.nome as nome_categoria ,j.* FROM jogo j 
  INNER JOIN categoria c on c.id = j.id_categoria
  WHERE j.id = '$idJogo'";

  $busca = mysqli_query($conexao,$sql);
  $array = mysqli_fetch_array($busca);
    $id = $array['id'];
    $titulo = $array['titulo'];
    $descricao = $array['descricao'];
    $id_usuario = $array['id_usuario'];
    $preco = $array['preco'];
    $id_categoria = $array['id_categoria'];
    $nome_categoria = $array['nome_categoria'];
    $foto = $array['foto'];
    /*$novaVisualizacao = $visualizacao + 1;
    $sqlVisualizacao = "UPDATE `produto` SET `avaliacao`='$novaVisualizacao' WHERE id = '$id'";
    $vBusca = mysqli_query($conexao,$sqlVisualizacao);     
    */

    //codigo para realizar compra
    $idUser = $_SESSION['idUser'];
    $sqlUser = "SELECT * FROM usuario WHERE id = '$idUser'";
    $buscaUser = mysqli_query($conexao,$sqlUser);
    $array = mysqli_fetch_array($buscaUser);
    $carteiraUser = $array['carteira'];
    if(isset($_POST['btnBuy'])){
      if ($preco > $carteiraUser) {
         $msgErro = "Você não possui crédito suficiente para realizar a compra desste jogo :( .";
      }
      elseif($preco <= $carteiraUser){
        $sqlCompra = "UPDATE `usuario` SET `carteira`= carteira - '$preco' WHERE id = '$idUser'";
        $compra = mysqli_query($conexao,$sqlCompra);
        $msgErro = "<p class='alerta'>Compra realizada com sucesso :)</p>";
        header('Refresh:2');
      }
    }    



?>
    <div class="gameArea">
    <?php if(!empty($msgErro)){ ?>  

        <div class="uk-alert-primary alertaFix" id="Alerta" uk-alert>
        <a class="uk-alert-close" uk-close></a>
          <p><?php echo "$msgErro";?></p>
      </div>
    <?php } ?>
    <img class="imageGame" src="../upload/<?php echo "$foto";?>">
    <div class="compraDiv">
    <form action="" method="post">
      <a ><button class="uk-button uk-button-danger btnHide colorFix">$<?php echo "$preco";?></button></a>
      <?php if($_SESSION['tipo'] == 1){?>  
        <a><button class="uk-button uk-button-danger btnHide colorFix"name="btnBuy" id="comprarBtn" type="submit">Comprar</button></a>
      <?php } ?>      
    </form>
    <?php if($_SESSION['tipo'] == 1911){?>  
        <a href="../dal/deleteJogo.php?idJogo=<?php echo "$id";?>"><button class="uk-button uk-button-danger btnHide" id="btn-apagar" >deletar jogo</button></a>
      <?php } ?>
    </div>

      <div class="uk-card uk-card-default uk-width-2-3@m">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom"><?php echo "$titulo";?></h3>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
        <h5>Descriçao:</h5>
        <p><?php echo "$descricao";?></p>
    </div>
    <div class="uk-card-body">
      <h5>Genero: </h5>
      <p><?php echo "$nome_categoria";?></p>
    </div>
    <div class="uk-card-body">
    <h5>Preço: </h5>
      <p>$<?php echo "$preco";?></p>
    </div>    
</div>


      <!--mensagem de erro-->
      </div>  

<!--
    <form class="cardText preco">
      <p>Avalie</p>
      <select>
        <option value="1"><p>1 estrela</p></option>
        <option value="2"><p>2 estrela</p></option>
        <option value="3"><p>3 estrela</p></option>
        <option value="4"><p>4 estrela</p></option>
        <option value="5"><p>5 estrela</p></option>
      </select>
    </form>
-->
