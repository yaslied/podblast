<?php $this->layout = false; ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Descobrir</title>

    <?= $this->Html->css('style-discover.css') ?>
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

  <body style="background-color: #202020; overflow-x: hidden;">
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
    <!--Seção TopPodcast-->
    <section class="top-podcast">
      <div class="container-flex scroll">
        <h5>Top Podcasts</h5>
        <div class="gallery row">
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          </div>
        </div>
      </div>
    </section>

    <!--Seção Recomendados-->
    <section class="recomended">
      <div class="container-flex scroll">
        <h5>Recomendados para você</h5>
        <div class="gallery row">
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          <button class="media-box">
            <div class="footer"> 
              Nerdcast
              <i class="fas fa-heart"></i>
            </div>
          </button>
          </div>
        </div>
      </div>
    </section>

    <!--Seção Categoria-->
    <section class="categorie scroll">
      <div class="gallery">
        <h5 class="categoria">Por categoria</h5>
        <?= $this->Html->link('<span> Ver tudo </span>', 
            ['controller' => 'Tags', 'action' => 'list'], 
            ['class' => 'ver-tudo', 'escape' => false]) ?>
        <div class="grid-container">
          <a href="#" class="grid-item com">
            Comédia<i class="fas fa-theater-masks"></i></a>
          <a href="#" class="grid-item mus">Música<i class="fas fa-music"></i></a>
          <a href="#" class="grid-item esp">Esportes<i class="fas fa-futbol"></i></a>
          <a href="#" class="grid-item sau">Saúde<i class="fas fa-heartbeat"></i></a>
          <a href="#" class="grid-item cin">Cinema<i class="fas fa-tv"></i></a>
          <a href="#" class="grid-item edu">Educação<i class="fas fa-user-graduate"></i></a>
        </div>
      </div>
    </section>
  </body>
</html>
