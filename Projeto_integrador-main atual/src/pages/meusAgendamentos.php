<?php
include("../php/conexao.php");

$dados = null;

if(isset($_GET['email'])){

    $email = $_GET['email'];

    $sql = "SELECT * FROM participantes
            WHERE email = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $email);

    $stmt->execute();

    $dados = $stmt->get_result();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Meus Agendamentos</title>

<link rel="stylesheet"
href="../css/voluntario.css">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>

<header class="banner">

<a href="../index.php">
<div class="logo">
<img src="../img/Logo png.png">
</div>
</a>

<div class="titulo">
<h1>Meus Agendamentos</h1>
<p>Consulte seus horários</p>
</div>

</header>

<main>

<div class="container">

<h2>Buscar Agendamento</h2>

<form method="GET">

<input
type="email"
name="email"
placeholder="Digite seu email"
required>

<button type="submit">
Buscar
</button>

</form>

<br>

<?php
if($dados){

    if($dados->num_rows > 0){

        while($row = $dados->fetch_assoc()){
?>

<div class="card">

<h3>
<?= $row['servico'] ?>
</h3>

<p>
<b>Nome:</b>
<?= $row['nome'] ?>
</p>

<p>
<b>Data:</b>
<?= $row['data_agendamento'] ?>
</p>

<p>
<b>Telefone:</b>
<?= $row['telefone'] ?>
</p>

<a href="../php/desmarcar.php?id=<?= $row['id'] ?>">

<button
onclick="return confirm('Deseja realmente desmarcar este atendimento?')">

Desmarcar Agendamento

</button>

</a>

</div>

<br>

<?php
        }

    } else {

        echo "
        <p>
        Nenhum agendamento encontrado.
        </p>";
    }
}
?>

</div>

</main>

<footer class="footer">

<p>Siga-nos nas redes sociais</p>

<div class="redes">
<i class="bi bi-facebook"></i>
<i class="bi bi-instagram"></i>
<i class="bi bi-twitter"></i>
<i class="bi bi-linkedin"></i>
<i class="bi bi-youtube"></i>
</div>

<span>
© 2026 AgendSaúde
</span>

</footer>

</body>
</html>