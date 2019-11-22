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

<div class="grid-item">
    <div class="card">
    <a href="SelectJogo.php?idJogo=<?php echo "$id";?>?visualizacao=20"><img src="../upload/<?php echo "$foto";?>"class="card-image" alt="..."></a>
        <div class="card-info">
            <h2><?php echo "$titulo";?></h2>
            <p class="card-text"></p>
            <a href="deleteJogo.php?id=<?php echo "$id";?>">
                <button class="delete-button">Excluir</button>
            </a>

            <a href="SelectJogo.php?idJogo=<?php echo "$id";?>?visualizacao=20" >
                <button class="view-button">Visualizar</button>
            </a>
        </div>
    </div>
</div>

<?php } ?>
