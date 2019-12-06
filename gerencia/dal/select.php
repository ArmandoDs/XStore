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
    <img class="imageGame" src="../uploadUser/nnjpeg">
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
    <?php if($idUser == $id_usuario ){?>  
        <a id="btn-editar"><p class="uk-button uk-button-danger btnHide">Editar</p></a>
      <?php } ?>
    </div>
    <?php if($idUser == $id_usuario ){?>  
        <div class="uk-card uk-card-default uk-width-2-3@m" id="editArea">
        <form action="../dal/updateJogo.php" method="post" enctype="">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h3 class="uk-card-title uk-margin-remove-bottom">
                        <input class="uk-input" name="id_jogo" type="text" id="id-2">
                        <h3 class="uk-card-title uk-margin-remove-bottom" name="idJogo"  id="titulo-2"><?php echo "$titulo";?></h3>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <h5>Descriçao:</h5>
                <!--Input de descricao-->
                <div class="uk-margin">
                    <div class="uk-inline">
                        <textarea class="uk-textarea" name="descricao" rows="5" id="descricao-2"></textarea>
                    </div>
                </div>
                <!-- end of Input de descricao-->
            </div>
            <div class="uk-card-body">
              <h5>Genero: </h5>
                <!--Input de categoria-->
                <div class="uk-margin">
                  <div uk-form-custom="target: > * > span:last-child">
                    <select required="" name="id_categoria">
                      <option class="white" value="<?php echo "$id_categoria";?>"><?php echo "$nome_categoria";?></option>
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
                    <span class="uk-link">
                      <span uk-icon="icon: pencil"></span>
                      <span></span>
                    </span>
                  </div>
                </div>
                <!-- end of Input de categoria-->
            </div>
            <div class="uk-card-body">
            <h5>Preço: </h5>
            <!--Input de titulo-->
            <div class="uk-margin">
                <div class="uk-inline">
                    <a class="uk-form-icon" uk-icon="icon: pencil"></a>
                    <input class="uk-input" name="preco" type="text" id="preco-2">
                </div>
            </div>
            <!-- end of Input de titulo-->
            </div>   
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <button type="submit" class="uk-button uk-button-danger" name="updateJogo">CONFIRMAR ALTERAÇÕES</button>
              </div>
            </div>
            </form>         
        </div>                 
      <?php } ?>    

<div class="uk-card uk-card-default uk-width-2-3@m" id="DescricaoHide">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom" id="id-1"><?php echo "$idJogo";?></h3>
                <h3 class="uk-card-title uk-margin-remove-bottom" id="titulo-1"><?php echo "$titulo";?></h3>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
        <h5>Descriçao:</h5>
        <p id="descricao-1"><?php echo "$descricao";?></p>
    </div>
    <div class="uk-card-body">
      <h5>Genero: </h5>
      <p><?php echo "$nome_categoria";?></p>
    </div>
    <div class="uk-card-body">
    <h5>Preço: </h5>
      <p id="preco-1"><?php echo "$preco";?></p>
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
