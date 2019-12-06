<?php
    require_once '../connect.php';

    function insert($nome) {
        $sql = "INSERT INTO categoria (nome) VALUES (:nome)";
        $stmt = config::prepare($sql);
        $stmt->bindParam(':nome', $nome);
        return $stmt->execute();
	header(location: ../admin/index.php);
    }

?>
