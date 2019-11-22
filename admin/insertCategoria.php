<?php 
    require_once('../dal/DALCategoria.php');

    try {
        insert($_POST["nome"]);
        header('location: Categoria.php ');
    } catch(PDOException $e) {
        echo $e->getCode(), $e->getMessage();
    }
?>