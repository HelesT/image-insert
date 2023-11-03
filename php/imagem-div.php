<?php
include("conecta.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imagens = $_POST['imagens'];

    $stmt = $pdo->prepare("INSERT INTO imagens_batata (imagens) VALUES (?)");
    $result = $stmt->execute([$imagens]);

    if ($result) {
        $response = array('message' => 'Sucesso ao inserir imagem');
        echo json_encode($response);
    } else {
        $response = array('message' => 'Erro ao inserir imagem');
        echo json_encode($response);
    }
} else {
    // Trate adequadamente outros métodos HTTP, se necessário
    http_response_code(405); // Método não permitido
}
?>
