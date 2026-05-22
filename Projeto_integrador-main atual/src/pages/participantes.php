<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AgendSaúde | Mutirão de Saúde Comunitária</title>
  <link rel="stylesheet" href="../css/voluntario.css">
  <script defer src="../js/voluntario.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<a href="https://wa.me/5531999999999" 
   class="whatsapp" 
   target="_blank">

   <i class="bi bi-whatsapp"></i>
</a>
<body>
  <!-- HEADER -->
  <header class="banner">
      <!-- LOGO -->
      <a href="../index.php">
        <div class="logo">
          <img src="../img/Logo png.png" alt="Ícone AgendSaúde">
        </div>
       </a>
      <!-- TÍTULO -->
      <div class="titulo">
        <h1>Mutirão de saúde comunitária</h1>
        <p>Agendamento & organização</p>
      </div>
  </header>
  <!-- CONTEÚDO PRINCIPAL -->
  <main>
    <div class="container">
        <h2>Cadastro de Participante</h2>
    
        <form action="../php/agendar.php" method="POST">

  <input
    type="text"
    name="nome"
    placeholder="Nome completo"
    required
  >

  <input
    type="text"
    name="identidade"
    placeholder="Identidade"
    required
  >

  <input
    type="text"
    name="cpf"
    id="cpf"
    placeholder="CPF"
    required
    maxlength="11"
  >

  <span id="erroCpf"></span>

  <input
    type="email"
    name="email"
    placeholder="Email"
    required
  >

  <input
    type="tel"
    name="telefone"
    id="telefone"
    placeholder="Telefone"
    required
    maxlength="13"
  >

  <span id="erroTelefone"></span>

  <input
    type="date"
    name="data_agendamento"
    required
  >

  <label>Atendimento:</label>

  <select name="servico" required>
      <option value="">Selecione</option>
      <option>Aferição de Pressão</option>
      <option>Glicemia</option>
      <option>Palestra</option>
      <option>Vacinação</option>
      <option>Orientação Nutricional</option>
  </select>

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
    <span>© 2026 AgendSaúde</span>
  </footer>

</body>
</html>