<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexao.php");

$nome = $_POST['nome'];
$identidade = $_POST['identidade'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data = $_POST['data_nascimento'];
$especialidade = $_POST['especialidade'];
$conselho = $_POST['conselho'];

/* FOTO */
$foto = $_FILES['foto']['name'];
$temp = $_FILES['foto']['tmp_name'];

$pasta = "../img/voluntarios/";

/* cria pasta se não existir */
if(!file_exists($pasta)){
    mkdir($pasta, 0777, true);
}

/* nome único para imagem */
$novoNome = time() . "_" . $foto;

$caminhoFoto = $pasta . $novoNome;

/* move a foto */
move_uploaded_file($temp, $caminhoFoto);

/* INSERT */
$sql = "INSERT INTO voluntarios
(foto, nome, identidade, cpf,
email, telefone, data_nascimento,
especialidade, conselho)

VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sssssssss",
    $caminhoFoto,
    $nome,
    $identidade,
    $cpf,
    $email,
    $telefone,
    $data,
    $especialidade,
    $conselho
);

if($stmt->execute()){

    echo "
    <script>
        alert('Voluntário cadastrado com sucesso!');
        window.location='../index.php';
    </script>
    ";

}else{

    echo "
    <script>
        alert('Erro ao cadastrar!');
        history.back();
    </script>
    ";
}
?>