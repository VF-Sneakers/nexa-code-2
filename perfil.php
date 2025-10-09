<?php
session_start();

// Verifica se o usuário está logado
if(!isset($_SESSION['usuario_id'])){
    header("Location: ../../pages/inicio/home.php"); // redireciona se não logado
    exit;
}

include '../../PHP/conexao.php'; // ajuste caminho

$id_usuario = $_SESSION['usuario_id'];

// Busca os dados do usuário
$sql = "SELECT nome, email, telefone, endereco FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows === 0){
    echo "Usuário não encontrado!";
    exit;
}

$usuario = $result->fetch_assoc();
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Perfil | NEXA Sneakers</title>

  <!-- Fonte (opcional) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- link pro CSS (ajuste o caminho se necessário) -->
  <link rel="stylesheet" href="perfil.css">
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

  <main class="perfil-wrap">
    <article class="perfil-card" role="region" aria-labelledby="meu-perfil">
      <header class="perfil-top">
        <div class="avatar" aria-hidden="true">
          <!-- ícone simples como placeholder -->
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="8" r="4" stroke="#111" stroke-width="1.2" fill="#efefef"/>
            <path d="M3 20c1.5-5 7.5-5 9-5s7.5 0 9 5" stroke="#111" stroke-width="1.2" fill="none"/>
          </svg>
        </div>

        <div class="perfil-titulo">
          <h1 id="meu-perfil">Meu Perfil</h1>
          <p class="perfil-sub">Gerencie seus dados</p>
        </div>
      </header>

      
      <section class="dados">
        <div class="linha">
          <label>Nome</label>
          <p id="user-name" class="valor"><?php echo htmlspecialchars($usuario['nome']); ?></p>
        </div>

        <div class="linha">
          <label>Email</label>
          <p id="user-email" class="valor"><?php echo htmlspecialchars($usuario['email']); ?></p>
        </div>

        <div class="linha">
        <p id="user-phone" class="valor"><?php echo htmlspecialchars($usuario['telefone']); ?></p>
          
        </div>

        <form class="endereco-form" method="POST" action="../../PHP/salvar_endereco.php" novalidate>
        <!-- substitua action="#" pelo caminho do seu PHP na integração -->
        <label for="endereco">Endereço</label>
        <input
          id="endereco"
          name="endereco"
          type="text"
          placeholder="Ex.: Rua Exemplo, 123 - Bairro - Cidade/UF"
           value="<?php echo htmlspecialchars($usuario['endereco']); ?>"
        />

        <!-- ID do usuário (quando integrar com PHP, preencher com o id da sessão) -->
        <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">

        <button type="submit" class="btn-salvar">Salvar</button>

        <!-- Mensagem de resultado (apenas visual; quando integrar, controlará via backend ou JS) -->
        <p class="msg-sucesso" aria-live="polite" hidden>Endereço salvo com sucesso!</p>
      </form>
    </article>
  </main>


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
