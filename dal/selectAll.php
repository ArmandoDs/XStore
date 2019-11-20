<?php
  include "../connect.php";
  $sql = "SELECT c.nome as nome_categoria ,j.* FROM jogo j
  INNER JOIN categoria c on c.id = j.id_categoria
  ORDER BY id DESC
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
<div class="card">   
  <div class="cardFix">  
    <a href="SelectJogo.php?idJogo=<?php echo "$id";?>" class="cardImage"><img src="../upload/<?php echo "$foto";?>"class="" alt="..."></a>
    <div class="cardContent">
      <div class="content btnHide"><p class="contenttext"><?php echo "$titulo";?></p></div>
      <div class="content"><p class="contenttext">$<?php echo "$preco";?></p></div>
      <div class="content"><p class="contentText"><?php echo "$nome_categoria";?></p></div>
      <a class="uk-button uk-button-danger btnHide" href="SelectJogo.php?idJogo=<?php echo "$id";?>">Visualizar</a>
    </div>    
  </div>    
</div>



<?php }?>
