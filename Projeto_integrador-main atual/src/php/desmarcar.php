<?php

include("conexao.php");

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM participantes
            WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);

    if($stmt->execute()){

        echo "
        <script>
        alert('Agendamento desmarcado!');
        history.back();
        </script>
        ";

    }else{

        echo "
        <script>
        alert('Erro ao desmarcar!');
        history.back();
        </script>
        ";
    }
}
?>