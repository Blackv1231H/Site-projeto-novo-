<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexao.php");

if(isset($_POST['mensagem'])){

    $mensagem = trim($_POST['mensagem']);

    if($mensagem != ""){

        $sql = "INSERT INTO comentarios (mensagem)
                VALUES (?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("s", $mensagem);

        if($stmt->execute()){

            header("Location: ../index.php");
            exit();

        }else{

            echo "Erro ao salvar comentário.";
        }

    }else{
        echo "Digite um comentário.";
    }

}else{
    echo "Nenhum comentário enviado.";
}
?>