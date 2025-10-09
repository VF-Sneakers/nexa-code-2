<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VF Sneakers Store</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <div class="logo">
          <a href="../../pages/inicio/home.php">
            <img src="../../img/logos/logoNEXApreto.png" alt="VF Sneakers">
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
      <main>
        <!-- Jordan/Nike -->
        <div class="brand-column">
          <div class="brand-logo">
            <img src="../../img/logos/logo.nike.png" alt="Nike" width="60">
          </div>
          <div class="product">
            <img src="../../img/feminino/dunk low.png" alt="DUNK LOW">
            <div class="product-info">
            <a href="/WEB/pages/CARRINHO/index.html">
                <span>TÊNIS NIKE DUNK LOW LX FEMININO <br><b>R$ 899,99</b></span>
            </a>
             </div>
          </div>
          <div class="product">
            <img src="../../img/feminino/AIR FORCE.png" alt="Air Force">
            <div class="product-info">
                <a href="/WEB/pages/CARRINHO/index.html">
              <span>TÊNIS NIKE AIR FORCE 1'07 LX FEMININO <br><b>R$ 999,99</b></span>
                </a>
            </div>
          </div>
          <div class="product">
            <img src="../../img/feminino/VOMERO.png" alt="VOMERO">
            <div class="product-info">
            <a href="/WEB/pages/CARRINHO/index.html">
                <span>TÊNIS NIKE VOMERO FEMININO <br><b>R$ 1129.99</b></span>
            </a>
            </div>
          </div>
        </div>
    
        <!-- Adidas -->
        <div class="brand-column">
          <div class="brand-logo">
            <img src="../../img/logos/logo.adidas.png" alt="Adidas" width="60">
          </div>
          <div class="product">
            <img src="../../img/feminino/SUPERSTAR.png" alt="SUPERSTAR">
            <div class="product-info">
            <a href="/WEB/pages/CARRINHO/index.html">
                <span>TÊNIS ADIDAS SUPERSTAR II FEMININO <br><b>R$ 449,99</b></span>
            </a>
            </div>
          </div>
          <div class="product">
            <img src="../../img/feminino/CAMPUS 00S.png" alt="CAMPUS 00S">
            <div class="product-info">
                <a href="/WEB/pages/CARRINHO/index.html">
                    <span>TÊNIS ADIDAS CAMPUS 00S FEMININO<br><b>R$ 699,99</b></span>
                </a>
              
            </div>
          </div>
          <div class="product">
            <img src="../../img/feminino/GAZELLE BOLD.png" alt="GAZELLE BOLD">
            <div class="product-info">
                <a href="/WEB/pages/CARRINHO/index.html">
                    <span>TÊNIS ADIDAS GAZELLE BOLD FEMININO<br><b>R$ 349,99</b></span>
                </a>
            </div>
          </div>
        </div>
    
        <!-- Puma -->
        <div class="brand-column">
          <div class="brand-logo">
            <img src="../../img/logos/logo.puma.png" alt="Puma" width="60">
          </div>
          <div class="product">
            <img src="../../img/feminino/PALERMO VINTAGE.png" alt="Puma PALERMO">
            <div class="product-info">
                <a href="/WEB/pages/CARRINHO/index.html">
                    <span>TÊNIS PUMA PALERMO VINTAGE <br><b>R$ 449,99</b></span>
                </a>
            </div>
          </div>
          <div class="product">
            <img src="../../img/feminino/LACE.png" alt=" 180 LACE">
            <div class="product-info">
                <a href="/WEB/pages/CARRINHO/index.html">
                    <span>TÊNIS PUMA 180 LACE WNS FEMININO <br><b>R$ 489,99</b></span>
                </a>
            </div>
          </div>
          <div class="product">
            <img src="../../img/feminino/PUMA.3.png" alt="RS X SOFT">
            <div class="product-info">
                <a href="/WEB/pages/CARRINHO/index.html">
                    <span>TÊNIS PUMA RS-X SOFT FEMININO <br><b>R$ 499,99</b></span>
                </a>
            </div>
          </div>
        </div>
      </main>
    

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

<script src="../../scripts/popup_login.js"></script>


</body>
</html>
