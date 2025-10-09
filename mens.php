
<!-- Esse PHP inicia, a partir do momento em que o usuário 
 se cadastrar no site! -->

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
            <img  src="../../img/masculino/Nike Jordan 1 Retro High.png" alt="Jordan 1">
            <div class="product-info">
            <a href="../../pages/CARRINHO/NIKE/Jordan 1/index.html">
                <span>TÊNIS NIKE JORDAN 1 RETRO HIGH MASCULINO <br><b>R$ 1119,99</b></span>
            </a>
             </div>
          </div>
          <div class="product">
            <img src="../../img/masculino/air force.png" alt="Air Force">
            <div class="product-info">
                <a href="../../pages/CARRINHO/NIKE/AIR FORCE LOW/index.html">
              <span>TÊNIS NIKE AIR FORCE 1'07 LV8 MASCULINO <br><b>R$ 799,99</b></span>
                </a>
            </div>
          </div>
          <div class="product">
            <img src="../../img/masculino/air-jordan-4.png" alt="Air Jordan 4">
            <div class="product-info">
            <a href="../../pages/CARRINHO/NIKE/air jordan 4/index.html">
                <span>TÊNIS NIKE AIR JORDAN 4 MASCULINO <br><b>R$ 1129.99</b></span>
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
            <img src="../../img/masculino/adidas.1.png" alt="Forum 84">
            <div class="product-info">
            <a href="../../pages/CARRINHO/ADIDAS/FORUM 84/index.html">
                <span>TÊNIS ADIDAS FORUM 84 LOW MASCULINO <br><b>R$ 749,99</b></span>
            </a>
            </div>
          </div>
          <div class="product">
            <img src="../../img/masculino/adidas 2.png" alt="FORUM 2000">
            <div class="product-info">
                <a href="../../pages/CARRINHO/ADIDAS/FORUM 2000/index.html">
                    <span>TÊNIS ADIDAS FORUM 2000 MASCULINO<br><b>R$ 699,99</b></span>
                </a>
              
            </div>
          </div>
          <div class="product">
            <img src="../../img/masculino/adidas 3.png" alt="ANTHONY EDWARDS">
            <div class="product-info">
                <a href="../../pages/CARRINHO/ADIDAS/ANTHONY/index.html">
                    <span>TÊNIS ADIDAS ANTHONY EDWARDS MASCULINO <br><b>R$ 849,99</b></span>
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
            <img src="../../img/masculino/puma.1.png" alt="Puma Effekt">
            <div class="product-info">
                <a href="../CARRINHO/PUMA/EFEKT/INDEX.HTML">
                    <span>TÊNIS PUMA EFEKT MASCULINO <br><b>R$ 749,99</b></span>
                </a>
            </div>
          </div>
          <div class="product">
            <img src="../../img/masculino/puma 2.png" alt="Tifosi lux sd">
            <div class="product-info">
                <a href="../CARRINHO/PUMA/TIFOSE/INDEX.HTML">
                    <span>TÊNIS PUMA TIFOSE LUX SD MASCULINO <br><b>R$ 489,99</b></span>
                </a>
            </div>
          </div>
          <div class="product">
            <img src="../../img/masculino/puma 3.png" alt="CA PRO RAIN">
            <div class="product-info">
                <a href="../CARRINHO/PUMA/CA PRO/INDEX.HTML">
                    <span>TÊNIS PUMA CA PRO RAIN MASCULINO <br><b>R$ 499,99</b></span>
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
