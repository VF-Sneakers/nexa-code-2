
<!-- Esse PHP inicia, a partir do momento em que o usuário 
 se cadastrar no site! -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Nexa Sneakers</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>

  <!-- TOPO -->
  <header>
    <div class="logo">
      <a href="../../pages/inicio/home.php">
        <img clas="logo" src="../../img/logos/logoNEXAbranco.png" alt="VF Sneakers">
      </a>
    </div>
    <nav>
      <a href="../MEN/mens.php">MASCULINO</a>
      <a href="../WOMAN/index.php">FEMININO</a>
      <a href="../KIDS/index.php">INFANTIL</a>
     
    </nav>

    <!-- Header organizada -->

    <style>
       nav{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 55px;
     }
    </style>

    <!-- Usuário logado no site -->

    <?php
  session_start();
  ?>
    <div class="buttons">
  <?php if(isset($_SESSION['usuario'])): ?>
    <!-- Usuário logado -->
    <div class="perfil-container">
        <img src="../../img/logos/icon_login.png" alt="Perfil" class="perfil-icone" onclick="toggleMenu()">
        <div class="menu-perfil" id="menuPerfil">
        <a href="../../pages/Perfil Usuarios/perfil.php" >Ver perfil</a>
            <a href="../../PHP/logout.php">Sair</a>
        </div>
    </div>



  <?php else: ?>
    <!-- Usuário não logado -->
    <button class="cadastro" onclick="window.location.href='../../pages/cadastro_usuarios/cadastro.html'">CADASTRAR-SE</button>
    <button class="entrar" onclick="abrirPopup()">ENTRAR</button>
  <?php endif; ?>
</div>

  </header>

  

  <!-- PopUp de Login -->
<div class="overlay" id="overlay">
  <div class="popup">
    <span class="fechar" onclick="fecharPopup()">×</span>
    <img src="../../img/logos/logoNEXApreto.png" alt="Nexa Sneakers" style="width:120px;">
    <h2>LOGIN</h2>

    <!-- Adicione id e method para enviar pro PHP quando não for admin -->
  <form method="POST" action="../../PHP/login.php">
    <input type="email" name="email" id="email" placeholder="EMAIL">
    <input type="password" name="senha" id="senha" placeholder="SENHA">

    <span class="recuperar">Esqueceu a senha? Recuperar</span>
    <br>

    <button type="submit" class="btn-entrar">ENTRAR</button>
    
    <button type="button" class="btn-cadastrar" onclick="window.location.href='../../pages/cadastro_usuarios/cadastro.html'">CRIAR CONTA</button>
</form>

  </div>
</div>




 <script src="../../scripts/popup_login.js"></script>

  <!-- PRINCIPAL -->
  <main>
    <section class="card brown">
      <img src="../../img/logos/imagem force-retro.png" alt="Air Force">
      <h1>AIR FORCE</h1>
    </section>

    <section class="card beige">
      <img src="../../img/logos/imagem forum.png" alt="Forum">
      <h1>FORUM</h1>
    </section>

    <section class="card gray">
      <img src="../../img/logos/imagem rs-x.png" alt="RS-X">
      <h1>RS-X</h1>
    </section>
  </main>

  


  <!-- Script para Abrir o menu de Perfil! -->
  <script>
function toggleMenu() {
    const menu = document.getElementById("menuPerfil");
    if(menu.style.display === "block") {
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
}

// Fecha o menu se clicar fora
window.onclick = function(e) {
    if(!e.target.matches('.perfil-icone')) {
        document.getElementById("menuPerfil").style.display = "none";
    }
}
</script>


  
</body>
</html>