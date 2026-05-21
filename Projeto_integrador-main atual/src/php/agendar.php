<?php

include("conexao.php");

$nome = $_POST['nome'];
$identidade = $_POST['identidade'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data = $_POST['data_agendamento'];
$servico = $_POST['servico'];

$sql = "INSERT INTO participantes
(nome, identidade, cpf, email,
telefone, data_agendamento, servico)

VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sssssss",
    $nome,
    $identidade,
    $cpf,
    $email,
    $telefone,
    $data,
    $servico
);

if($stmt->execute()){

    echo "
    <script>
        alert('Agendamento realizado com sucesso!');
        window.location='../index.php';
    </script>
    ";

}else{

    echo "
    <script>
        alert('Erro ao agendar!');
        history.back();
    </script>
    ";
}
?>