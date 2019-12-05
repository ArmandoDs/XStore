<?php
    require_once '../config.php';

    function delGame($id) {
        $sql = "DELETE FROM `jogo` WHERE id = :id";
        $stmt = config::prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

?>