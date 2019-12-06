<?php
  include "../connect.php";
  $sql = "SELECT c.nome as nome_categoria ,j.* FROM jogo j
  INNER JOIN categoria c on c.id = j.id_categoria
  ORDER by numero_vendas DESC LIMIT 5
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
    <li class="uk-transition-toggle" tabindex="0" style="overflow:hidden;">
        <img src="../uploadUser/nnjpeg"class="card-image" alt="">
        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove"><?php echo "$titulo";?></h3>
                    <a href="SelectJogo.php?idJogo=<?php echo "$id";?>" class="uk-button uk-button-text">Visualizar</a>
        </div>
    </li>   

<?php } ?>
