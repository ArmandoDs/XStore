<?php 
    require_once('../dal/DALJogo.php');

    try {
        delGame($_GET["id"]);
        header('location: ../admin/index.php ');
    } catch(PDOException $e) {
        echo $e->getCode(), $e->getMessage();
    }
?>