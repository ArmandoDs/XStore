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


    <div>
        <div class="uk-card uk-card-default" style="overflow:hidden;">
            <div class="uk-card-media-top">
                <a href="SelectJogo.php?idJogo=<?php echo "$id";?>"><img src="../upload/<?php echo "$foto";?>"class="card-image" alt=""></a>
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title"><?php echo "$titulo";?></h3>
                <p><?php echo "$preco";?></p>
                <a href="SelectJogo.php?idJogo=<?php echo "$id";?>" class="uk-button uk-button-danger">Visualizar</a>
            </div>
        </div>
    </div>

    <!--
    <h3 class="uk-margin-remove"><?php echo "$titulo";?></h3>
    <p class="uk-margin-remove"><a href="SelectJogo.php?idJogo=<?php echo "$id";?>?visualizacao=20"></a></p>
    -->

<?php } ?>
