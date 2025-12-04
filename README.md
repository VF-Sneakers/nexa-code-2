# Nexa Sneakers - SITE

## Página Inicial (Home)
<img width="1907" height="924" alt="image" src="https://github.com/user-attachments/assets/c8b11879-06a2-4d34-83bc-b8562bd65199" />

A Página Inicial (Home) é o ponto de entrada do usuário no sistema e apresenta a identidade visual da marca, categorias principais de navegação e acesso às telas de autenticação e cadastro.


## Requisitos Funcionais (RF)

### RF — Identidade Visual

A Home deve exibir:

* A logo **Nexa Sneakers** no canto superior esquerdo.
* Imagens principais destacando modelos de tênis.

### RF — Navegação

O cabeçalho deve disponibilizar:

* Botão **Cadastre-se**, que redireciona para a tela de cadastro com os campos:
  - Nome
  - E-mail
  - Telefone
  - Senha
  - Endereço 
* Botão **Entrar**, que abre a tela responsável pela autenticação.
  - E-mail
  - Senha
* Botões superiores de categoria:

  * Masculino
  * Feminino
  * Infantil

Cada botão deve direcionar para sua respectiva página de produtos.

### RF — Destaque das Categorias

A área central da Home deve exibir três seções visuais destacadas, cada uma representando:

* Masculino
* Feminino
* Infantil

Cada área deve atuar como botão clicável para sua categoria.

### RF — Redirecionamentos

Todos os elementos interativos devem executar navegação para suas páginas responsáveis:

* Categorias → lista de produtos
* Cadastre-se → tela de cadastro
* Entrar → tela de autenticação/login

## Requisitos Não Funcionais (RNF)

### RNF — Usabilidade

* Interface simples e intuitiva
* Ícones e textos claros
* Elementos visuais com boa legibilidade

### RNF — Responsividade

* Layout adaptável a diferentes resoluções
* Adequado para desktop, tablets e dispositivos mobile

### RNF — Desempenho

* Imagens otimizadas para garantir carregamento rápido
* Navegação fluida sem travamentos

### **RNF — Acessibilidade

* Contraste adequado entre elementos
* Textos alternativos quando necessário
* Navegação facilitada para leitores de tela e teclado

### RNF — Coerência Visual

* Manter padrões de cores, fontes e espaçamentos definidos pela identidade da marca
* Transições suaves e consistentes entre seções

---

## PopUp Login
<img width="1906" height="922" alt="image" src="https://github.com/user-attachments/assets/e0b3b4f4-5e44-416a-a8ac-1c0d5613cf3e" />

O pop-up é exibido quando o usuário clica no botão **"Entrar"** localizado no cabeçalho da página Home, apresentando o formulário de autenticação e funcionalidades associadas.


## Estrutura do Pop-up

### **Formulário de Login**

O pop-up contém:

* Campo **E-mail** (obrigatório)
* Campo **Senha** (obrigatório)
* Botão **Entrar** – autentica o usuário
* Botão **Criar conta** – redireciona para a página de cadastro

### **Recuperação de Senha**

Abaixo do formulário é exibida a frase:

> **"Esqueceu a senha? Recuperar"**

Ao clicar, o usuário é redirecionado para a tela de recuperação de senha.

#### Funcionalidade da tela de recuperação:

* Usuário informa o **e-mail cadastrado**
* O sistema envia um **link de redefinição de senha**
* O usuário define uma **nova senha** a partir do link

### **Funcionalidades Extras**

* **Validação em tempo real** dos campos do formulário
* **Feedback visual** para dados inválidos

## Requisitos Funcionais

### **Exibição do pop-up**

O sistema deve exibir o pop-up quando o usuário clicar em **"Entrar"** no cabeçalho.

### **Preenchimento dos campos**

O usuário deve conseguir inserir:

* E-mail
* Senha

### **Validação em tempo real**

O sistema deve validar automaticamente:

* Formato de e-mail
* Campos vazios
* Senha fora do padrão

### **Autenticação**

Ao clicar em **Entrar**:

* As credenciais devem ser verificadas
* O sistema deve exibir mensagens de erro quando necessário
* Usuário deve ser redirecionado para a **Home logada** ao autenticar

### **Redirecionamento para criação de conta**

O botão **Criar conta** deve levar o usuário à página **Cadastro**.

### **Recuperação de senha**

Ao clicar em **"Recuperar"**, o usuário deve ser direcionado à página de recuperação de senha.

### **Envio do link de redefinição**

O sistema deve enviar um e-mail com link seguro de redefinição.

### **Redefinição de senha**

O link deve possibilitar a criação de uma nova senha válida.

### **Fechamento do pop-up**

O usuário deve conseguir fechar o pop-up clicando fora da tela **overlay**.

## Requisitos Não Funcionais

### **Usabilidade**

* Interface intuitiva e fácil de usar
* Elementos organizados e visual limpo

### **Responsividade**

* Pop-up ajustável para desktop, tablet e mobile

### **Acessibilidade**

* Navegação via teclado (TAB, ENTER, ESC)
* Contraste adequado entre texto e fundo
* Suporte a ARIA para tecnologias assistivas

---

<img width="1872" height="919" alt="image" src="https://github.com/user-attachments/assets/23000c6f-6b7c-48e2-8f5e-e53c1f1a31a3" />

Mantém o mesmo cabeçalho da página **Home**, com os seguintes elementos:

### Logo
- Localizado no canto superior esquerdo
- Representa a marca **Nexa Sneakers**

### Botões Centrais
- **Masculino**
- **Feminino**
- **Infantil**

Cada botão redireciona para sua respectiva página de produtos.

### Botões à Direita
- **Cadastre-se**: redireciona para a página de cadastro
- **Login**: abre um pop-up para autenticação com campos de **E-mail** e **Senha**

## Catálogo de Tênis Masculinos

A página apresenta os produtos organizados em **três fileiras**, cada uma contendo **três tênis**, totalizando **nove modelos**.

### Cada tênis exibe:
- **Imagem do produto**
- **Nome completo**
- **Preço em reais (R$)**
- Estilo visual **limpo e responsivo**


## Interatividade

Ao clicar em qualquer tênis, o usuário é redirecionado para a página **"Seleção de Tênis"**, onde poderá visualizar:

- **Descrição detalhada**
- **Tamanhos disponíveis**
- Botão **"Comprar"**
- Botão **"Adicionar ao Carrinho"**

---

# Tela — Meu Perfil

<img width="1903" height="923" alt="image" src="https://github.com/user-attachments/assets/0034a3eb-ce5b-4c4b-920e-ad14c25436a3" />

A tela **Meu Perfil** permite que o usuário visualize, edite e gerencie suas informações pessoais.  
O acesso é feito pelo ícone de perfil localizado no cabeçalho da página.


## Requisitos Funcionais (RF)

### Exibição das Informações do Usuário
- A tela deve carregar e exibir automaticamente os dados do usuário:
  - Nome  
  - E-mail  
  - Telefone  
  - Endereço  

### Edição dos Dados
- O usuário deve poder editar qualquer um dos campos do formulário:
  - Nome  
  - E-mail  
  - Telefone  
  - Endereço  

### Validação de Campos em Tempo Real
- Os campos devem ser validados enquanto o usuário digita:
  - Verificação de e-mail válido  
  - Telefone somente com números  
  - Campos obrigatórios não podem ficar vazios  
  - Erros devem ser indicados com feedback visual  

### Salvar Alterações
- Ao clicar no botão **Salvar**, o sistema deve:
  - Validar todos os campos  
  - Registrar as alterações  
  - Exibir mensagem de sucesso ou erro  

### Deletar Conta
- O botão **Deletar Conta** deve:
  - Abrir um pop-up de confirmação  
  - Excluir os dados do usuário após confirmação  
  - Redirecionar para uma página adequada (home)  

### Avatar de Perfil
- A tela deve mostrar um ícone de avatar padrão acima do formulário.  

### Menu Superior
- Os botões no cabeçalho:
  - Masculino  
  - Feminino  
  - Infantil  
- Devem redirecionar para suas páginas de categoria.  

### Acesso via Ícone de Perfil
- O ícone de usuário no canto superior direito deve abrir a tela **Meu Perfil**.  


## Requisitos Não Funcionais (RNF)

### Usabilidade
- A interface deve ser intuitiva, organizada e fácil de usar.  

### Acessibilidade
- A interface deve garantir:
  - Labels associados aos inputs  
  - Boa leitura  
  - Contraste adequado  
  - Botões acessíveis  

### Segurança
- Dados sensíveis não devem ser exibidos em logs.  
- Exclusão de conta deve remover completamente as informações.  
- Caso armazenamento local seja usado, deve ser indicado como recurso didático.  

### Padrão Visual
- A tela deve seguir o estilo geral do projeto:
  - Fundo suave  
  - Borda arredondada  
  - Botão principal preto  
  - Botão de exclusão vermelho  

### Feedback ao Usuário
- O sistema deve fornecer mensagens claras para:
  - Sucesso  
  - Erros de validação  
  - Confirmação de exclusão  

---
# Tela de Acesso
<img width="1899" height="919" alt="image" src="https://github.com/user-attachments/assets/7be46299-a4aa-472f-b60b-4e6684a32b2d" />
Essa página é exibida **automaticamente** quando o usuário clica em qualquer produto (ex.: tênis) sem estar autenticado.
Ela funciona como uma *barreira de acesso*, garantindo que apenas usuários logados possam finalizar compras ou continuar navegando em áreas restritas.

Na interface, o usuário vê:

* O **logo da marca "Nexa Sneakers"** ao centro.
* Um texto comunicando:
  *“Que tal criar uma conta para continuar comprando? Se já possui cadastro, entre em sua conta :)”*
* Dois botões principais:

  * **Cadastrar-se**
  * **Entrar**
* Fundo simples, limpo, sem distrações, reforçando o foco na ação principal.

A página não possui campo de login direto — ela apenas direciona o usuário para as telas adequadas.

---

# Requisitos Funcionais (RF)

### Redirecionamento ao clicar em qualquer produto

Ao selecionar um produto no catálogo, caso o usuário não esteja autenticado, ele deve ser automaticamente enviado para esta tela.

### Exibição da mensagem de incentivo ao cadastro/login

A página deve exibir o texto motivando o usuário a criar uma conta ou acessar a sua.

### Botão “Cadastrar-se”**

Ao clicar, o sistema deve redirecionar o usuário para o formulário de cadastro.

### Botão “Entrar”

Ao clicar, o sistema deve redirecionar o usuário para a tela de login.

### Verificação de sessão

O sistema deve verificar se o usuário possui uma sessão ativa (ex.: via localStorage, sessionStorage ou cookies).
Se sim:

* O usuário **não deve ver essa tela**
* Ele deve ser levado ao produto escolhido normalmente.

### Comportamento responsivo

A página deve ajustar seu layout para diferentes tamanhos de tela (PC, tablet, smartphone).

# Requisitos Não Funcionais (RNF)

### Simplicidade e foco

A página deve manter layout minimalista, garantindo clareza e foco na ação desejada (login/cadastro).

### Tempo de resposta

O redirecionamento para a tela de login ou cadastro deve acontecer em no máximo **1 segundo**, garantindo boa experiência.

### Segurança

Nenhuma informação sensível deve ser exposta nesta tela.
A verificação de login deve ser feita apenas após o redirecionamento.

### Acessibilidade Visual

Contraste adequado entre texto e fundo, facilitando leitura.

### Modularidade

A tela deve ser fácil de substituir ou estilizar, mantendo sua funcionalidade independente do restante do site.

---

<img width="1895" height="929" alt="image" src="https://github.com/user-attachments/assets/5332e3b1-37c9-4cc9-8049-f44f715db1eb" />


<img width="1894" height="936" alt="image" src="https://github.com/user-attachments/assets/1218cf2d-876c-4003-873d-c580a4406178" />

<img width="1896" height="932" alt="image" src="https://github.com/user-attachments/assets/20064c04-1a69-46db-b611-4b8f1160355a" />


<img width="1863" height="923" alt="image" src="https://github.com/user-attachments/assets/218b0224-d88a-47a5-be17-b34ac21a4991" />

<img width="1840" height="914" alt="image" src="https://github.com/user-attachments/assets/a061daa5-325b-47bf-a502-e920588c45b0" />

<img width="1876" height="932" alt="image" src="https://github.com/user-attachments/assets/55607ed2-d8f3-4d54-b27a-2f0221b106b6" />

<img width="1845" height="918" alt="image" src="https://github.com/user-attachments/assets/a46705ca-5fa2-46d7-ae82-81d29fac1f67" />




## Design e Usabilidade

- Layout dividido por **marcas** (ex: Nike, Adidas, Puma)
- Navegação **fluida e intuitiva**





https://www.figma.com/proto/uVpkLKpDFHFYPrRPK4LrR6/Untitled?node-id=418-546&t=h5RgJurgbyPv4LEA-1&scaling=min-zoom&content-scaling=fixed&page-id=418%3A527&starting-point-node-id=418%3A546
