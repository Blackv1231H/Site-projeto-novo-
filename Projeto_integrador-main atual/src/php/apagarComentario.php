<?php

include("conexao.php");

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM comentarios
            WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);

    if($stmt->execute()){

        header("Location: ../index.php");
        exit();

    }else{

        echo "Erro ao apagar comentário.";
    }
}
?>