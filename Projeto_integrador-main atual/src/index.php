<?php
include("php/conexao.php");

$sql = "SELECT * FROM comentarios
ORDER BY id DESC";

$comentarios = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>AgendSaúde | Mutirão de Saúde Comunitária</title>

  <link rel="stylesheet" href="css/style.css">

  <script defer src="js/script.js"></script>

  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>

<!-- BOTÃO WHATSAPP -->
<a href="https://wa.me/5531999999999"
class="whatsapp"
target="_blank">

<i class="bi bi-whatsapp"></i>

</a>

<!-- HEADER -->
<header class="banner">

  <a href="index.php">
    <div class="logo">
      <img src="img/Logo png.png"
      alt="Ícone AgendSaúde">
    </div>
  </a>

  <div class="titulo">
    <h1>Mutirão de Saúde Comunitária</h1>
    <p>Agendamento & Organização</p>
  </div>

</header>

<!-- MAIN -->
<main>

<!-- CARROSSEL -->
<section class="carousel">

<button class="carousel-btn prev">
❮
</button>

<div class="carousel-track-container">

<ul class="carousel-track">

<li class="carousel-slide current">
<img src="img/feira1.png">
</li>

<li class="carousel-slide">
<img src="img/feira2.png">
</li>

<li class="carousel-slide">
<img src="img/feira3.png">
</li>

<li class="carousel-slide">
<img src="img/feira4.png">
</li>

<li class="carousel-slide">
<img src="img/feira5.png">
</li>

<li class="carousel-slide">
<img src="img/feira6.png">
</li>

<li class="carousel-slide">
<img src="img/feira7.png">
</li>

<li class="carousel-slide">
<img src="img/feira8.png">
</li>

<li class="carousel-slide">
<img src="img/feira9.png">
</li>

<li class="carousel-slide">
<img src="img/feira10.png">
</li>

</ul>

</div>

<button class="carousel-btn next">
❯
</button>

</section>

<!-- DESCRIÇÃO -->
<section class="descricao">

<h2>Descrição</h2>

<p>
O AgendSaúde é um projeto criado para facilitar
a organização dos mutirões de saúde comunitária.
</p>

<br>

<p>
Nosso objetivo é promover o cuidado preventivo
e aproximar serviços essenciais da comunidade.
</p>

</section>

<!-- AÇÕES -->
<section class="acoes">

<!-- VOLUNTÁRIO -->
<article class="card">

<i class="bi bi-person-plus"></i>

<h3>Participe como voluntário</h3>

<p>
Inscreva-se como enfermeiro,
estudante ou agente comunitário.
</p>

<a href="./pages/voluntario.php">
<button>
Quero ser voluntário
</button>
</a>

</article>

<!-- AGENDAMENTO -->
<article class="card destaque">

<i class="bi bi-calendar-check"></i>

<h3>Agende seu atendimento</h3>

<p>
Agende facilmente seu horário
para os serviços do mutirão.
</p>

<a href="./pages/participantes.php">
<button>
Fazer agendamento
</button>
</a>

</article>

<!-- MEUS AGENDAMENTOS -->
<article class="card">

<i class="bi bi-calendar-week"></i>

<h3>Meus Agendamentos</h3>

<p>
Veja seus horários já cadastrados.
</p>

<a href="./pages/meusAgendamentos.php">

<button>
Ver Agendamentos
</button>

</a>

</article>

</section>

<!-- MAPA -->
<section class="mapa">

<h2>Mapa</h2>

<iframe
src="https://www.google.com/maps?q=Paróquia+São+Gonçalo+Contagem+MG&output=embed"
loading="lazy">
</iframe>

</section>

<!-- COMENTÁRIOS -->
<section class="comentarios">

<h2>Comentários</h2>

<form
action="php/comentario.php"
method="POST">

<textarea
name="mensagem"
placeholder="Deixe seu comentário..."
required>
</textarea>

<button type="submit">
Enviar
</button>

</form>

<div class="lista-comentarios">

<?php
while($row = $comentarios->fetch_assoc()){
?>

<article class="comentario">

<div class="comentario-conteudo">

<i class="bi bi-person-circle"></i>

<p>
<?= htmlspecialchars($row['mensagem']) ?>
</p>

</div>

<a
href="php/apagarComentario.php?id=<?= $row['id'] ?>"
onclick="return confirm('Deseja apagar este comentário?')">

<button class="btn-apagar">
Apagar
</button>

</a>

</article>

<?php
}
?>

</div>

</section>

</main>

<!-- FOOTER -->
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