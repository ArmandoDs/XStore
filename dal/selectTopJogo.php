<?php
  include "../connect.php";
  $sql = "SELECT c.nome as nome_categoria ,j.* FROM jogo j
  INNER JOIN categoria c on c.id = j.id_categoria
  ORDER by numero_vendas DESC LIMIT 4
  ";

  $busca = mysqli_query($conexao,$sql);
  while ($array = mysqli_fetch_array($busca)) {
    $id = $array['id'];
    $titulo = $array['titulo'];
    $preco = $array['preco'];
    $id_categoria = $array['id_categoria'];
    $nome_categoria = $array['nome_categoria'];
    $foto = $array['foto'];
    /*$visualizacao = $array['avaliacao'];*/

?>
<!--
<div class="card">
  <a href="SelectJogo.php?idJogo=<?php echo "$id";?>?visualizacao=20"><img src="../upload/<?php echo "$foto";?>"class="card-img-top" alt="..."></a>
  <div class="card-body">
    <h5 class="card-title"><?php echo "$titulo";?></h5>
  </div>
</div>
  -->
<div class="card bg-dark text-white">
<a href="SelectJogo.php?idJogo=<?php echo "$id";?>?visualizacao=20"><img src="../upload/<?php echo "$foto";?>"class="card-img-top" alt="..."></a>
  <div class="card-img-overlay">
    <h5 class="card-title"><?php echo "$titulo";?></h5>
    <p class="card-text"></p>
    <a  href="SelectJogo.php?idJogo=<?php echo "$id";?>?visualizacao=20"><button class="btn btn-primary" type="submit">Visualizar</button></a>
  </div>
</div>

<!--
  <div class="card">
  <i class="m material-icons">dashboard</i>
    <a href="selectJogo.php?idJogo=<?php echo "$id";?>" ><img class="cardImage" src="../upload/<?php echo "$foto";?>"></a>
  <div class="cardText">
      <p class=""><?php echo "$titulo";?></p>

      <!--<div class="cardText"><p class="text"> descriçao: <?php echo "$descricao";?></p></div>-->

      <!--<div class="cardText"><p class="text"> id_usuario:<?php echo "$id_usuario";?></p></div>-->
<!--
      <p class=""><?php echo "$nome_categoria";?></p>

      <p class="">$<?php echo "$preco";?></p>


      <a  href="SelectJogo.php?idJogo=<?php echo "$id";?>?visualizacao=20"><button class="btn" type="submit">Visualizar</button></a>
    </div>
  </div>-->




<?php }?>
