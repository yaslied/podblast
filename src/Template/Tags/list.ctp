<?php $this->layout = false; ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categorias</title>
    <?= $this->Html->css('style-tags.css') ?>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/path/to/flickity.css" media="screen" />

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!--Navbar-->
    <nav class="nav-simple">
      <div class="identity">
      <?= $this->Html->image('logo.png', ['class' => 'logo', 'alt' => 'logo']) ?>
        <span>Pod<strong>blast</strong></span>
      </div>

      <a href="" class="favorites" style="color: blueviolet">Favoritos</a>

      <a href="" class="library" style="color: blueviolet; text-align: right"
        >Biblioteca</a
      >

      <div class="icon-perfil">
      <?= $this->Html->image('icon.png', ['class' => 'user-icon', 'alt' => 'ícone perfil']) ?>
      </div>

      <div class="dropdown">
        <button
          class="btn btn-dark dropdown-toggle"
          type="button"
          id="dropdownMenu2"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          Nome de usuário
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <?= $this->Html->link('<button class="dropdown-item" type="button">
            <i class="far fa-user"></i>Meu perfil
            </button>', 
            ['controller' => 'Usuarios', 'action' => 'profile'], 
            ['class' => 'login-btn', 'escape' => false]) ?>
          
          <?= $this->Html->link('<button class="dropdown-item"type="button">
            <i class="fas fa-sign-out-alt"></i>Sair
            </button>', 
            ['controller' => 'Usuarios', 'action' => 'logout'], 
            ['class' => 'login-btn', 'escape' => false]) ?>
        </div>
      </div>
    </nav>

    <!--Conteúdo-->
    <?= $this->Html->link('<span> < Descobrir </span>', 
            ['controller' => 'Canais', 'action' => 'discover'], 
            ['class' => 'descobrir', 'style' => 'padding-top: 73px; position: absolute', 'escape' => false]) ?>

    <h5>Todas as categorias</h5>
    <ul class="row-cols-lg-4">
      <button type="button" class="btn btn-dark">
        <i class="far fa-file-alt"></i>
        Notícias<i class="fas fa-angle-right"></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-users"></i>Sociedade e cultura<i
          class="fas fa-angle-right"
        ></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-hand-holding-usd"></i>Negócios<i
          class="fas fa-angle-right"
        ></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-user-graduate"></i>Educação<i
          class="fas fa-angle-right"
        ></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="far fa-grin-squint-tears"></i>Comédia<i
          class="fas fa-angle-right"
        ></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-heartbeat"></i>Saúde e fitness<i
          class="fas fa-angle-right"
        ></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-cross"></i>
        Religião e espiritualidade<i class="fas fa-angle-right"></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-theater-masks"></i>Artes<i
          class="fas fa-angle-right"
        ></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-flask"></i>Ciência<i class="fas fa-angle-right"></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-music"></i>Música<i class="fas fa-angle-right"></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-futbol"></i>Esportes<i class="fas fa-angle-right"></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-tv"></i>Filmes e TV<i class="fas fa-angle-right"></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-mobile-alt"></i>Tecnologia<i
          class="fas fa-angle-right"
        ></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-umbrella-beach"></i>Lazer<i
          class="fas fa-angle-right"
        ></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-chess-rook"></i>História<i
          class="fas fa-angle-right"
        ></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-baby-carriage"></i>Crianças e família<i
          class="fas fa-angle-right"
        ></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-crosshairs"></i>Crimes<i
          class="fas fa-angle-right"
        ></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="far fa-hand-spock"></i>Ficção<i
          class="fas fa-angle-right"
        ></i>
      </button>
      <button type="button" class="btn btn-dark">
        <i class="fas fa-landmark"></i>Governo<i class="fas fa-angle-right"></i>
      </button>
    </ul>
  </body>
</html>
