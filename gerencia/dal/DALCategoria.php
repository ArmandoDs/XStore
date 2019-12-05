<?php
    require_once '../config.php';

    function insert($nome) {
        $sql = "INSERT INTO `categoria` (nome) VALUES (:nome)";
        $stmt = config::prepare($sql);
        $stmt->bindParam(':nome', $nome);
        return $stmt->execute();
    }

?>