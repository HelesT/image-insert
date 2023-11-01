<?php
include("conecta.php");

    $base64Image = $_POST["imagem"];

    try {
        $sql = "INSERT INTO sua_tabela (imagem_blob) VALUES (?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $base64Image, PDO::PARAM_STR);
        $stmt->execute();
    }

?>
