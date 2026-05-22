<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>AgendSaúde | Cadastro de Voluntário</title>

  <link rel="stylesheet" href="../css/voluntario.css">
  <script defer src="../js/voluntario.js"></script>

  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>

<!-- HEADER -->
<header class="banner">

  <a href="../index.php">
    <div class="logo">
      <img src="../img/Logo png.png"
      alt="Ícone AgendSaúde">
    </div>
  </a>

  <div class="titulo">
    <h1>Mutirão de saúde comunitária</h1>
    <p>Agendamento & organização</p>
  </div>

</header>

<!-- WHATSAPP -->
<a href="https://wa.me/5531999999999"
class="whatsapp"
target="_blank">

<i class="bi bi-whatsapp"></i>

</a>

<!-- CONTEÚDO -->
<main>

<div class="container">

<h2>Cadastro de Voluntário</h2>

<form
action="../php/cadastrarVoluntario.php"
method="POST"
enctype="multipart/form-data">

<label>Foto:</label>

<input
type="file"
name="foto"
accept="image/*"
onchange="previewFoto(event)"
required>

<img id="preview">

<input
type="text"
name="nome"
placeholder="Nome completo"
required>

<input
type="text"
name="identidade"
placeholder="Identidade"
required>

<input
type="text"
name="cpf"
id="cpf"
placeholder="CPF"
maxlength="11"
required>

<span id="erroCpf"></span>

<input
type="email"
name="email"
placeholder="Email"
required>

<input
type="tel"
name="telefone"
id="telefone"
placeholder="Telefone"
maxlength="13"
required>

<span id="erroTelefone"></span>

<input
type="date"
name="data_nascimento"
required>

<label>Especialidade:</label>

<select
name="especialidade"
required>

<option value="">
Selecione
</option>

<option>
Enfermeiro(a)
</option>

<option>
Agente de Saúde
</option>

<option>
Estudante
</option>

</select>

<input
type="text"
name="conselho"
placeholder="Conselho"
required>

<button type="submit">
Cadastrar
</button>

</form>

</div>

</main>

<!-- FOOTER -->
<footer class="footer">

<p>Siga-nos nas redes sociais</p>

<div class="redes">
    <i class="bi bi-facebook"></i>

    <a href="https://www.instagram.com/agendsaudeunidade/" target="_blank">
        <i class="bi bi-instagram"></i>
    </a>

</div>

<span>
© 2026 AgendSaúde
</span>

</footer>

</body>
</html>