<?php $this->layout = false; ?>
<html>
  <head>
    <title>Login</title>
    <meta charset="UTF-8">
    <?= $this->Html->css('style-profile.css') ?>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="perfil-template">

      <nav class="nav-withList">

        <div class="identity">
          <!-- <img class="logo" src="../../../img/logo@2x.jpg" alt="logo"> -->
          <svg class="logo" width="69" height="51" viewBox="0 0 69 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M69 25.5C59.0962 26.8829 60.9763 37.2238 58.3194 37.2238C56.2892 37.2238 56.5452 29.0497 54.162 29.0497C51.7787 29.0497 51.0637 45.7679 48.0184 45.7679C44.9731 45.7679 43.958 27.887 42.378 27.887C40.798 27.887 39.7564 42.5617 37.532 42.5793C35.2988 42.5969 34.7251 27.7725 32.2977 27.7725C29.8703 27.7725 30.038 51 26.8868 51C23.7356 51 23.1707 27.8606 20.7609 27.8606C18.36 27.8606 17.4332 37.2855 15.8267 37.2855C12.2782 37.2855 16.6211 26.328 0 25.5C9.83318 24.1523 8.70334 13.5912 10.9277 13.5912C13.4081 13.5912 12.9138 21.871 15.0411 21.871C17.7509 21.8798 18.5277 0 21.6789 0C24.8301 0 24.6536 23.2275 27.0898 23.2275C29.5172 23.2275 30.091 8.40311 32.3242 8.42072C34.5574 8.43834 35.5901 23.113 37.1701 23.113C38.7502 23.113 39.7653 5.23212 42.8105 5.23212C45.8558 5.23212 46.1118 23.3684 48.9541 23.3684C51.1078 23.3684 51.0637 13.7762 53.1116 13.7762C55.7685 13.7762 53.8883 24.1083 63.7921 25.5H69Z" fill="url(#paint0_linear)"/>
            <defs>
            <linearGradient id="paint0_linear" x1="11.2527" y1="41.3932" x2="56.1952" y2="6.02558" gradientUnits="userSpaceOnUse">
            <stop offset="0.0395101" stop-color="#9B00FF"/>
            <stop offset="0.4757" stop-color="#F900F9"/>
            <stop offset="1" stop-color="#FFCE00"/>
            </linearGradient>
            </defs>
          </svg>
          <span class="brand">Pod<strong>blast</strong></span>
        </div>

        <div class="nav-list">
          <?= $this->Html->link('<button class="nav-list-item"><span>Descobrir</span></button>', 
            ['controller' => 'Canais', 'action' => 'discover'], 
            ['class' => 'login-btn', 'escape' => false]) ?>
          
        </div>
  
        <div class="right-area">
        <?= $this->Html->image('profile.png', ['class' => 'user-picture']) ?>

          <button>
            <span><?= $user['nome'] ?></span>
          </button>
        </div>
      </nav>

      <section id="section1" class="section img-background">

        <div class="user-container column">
  
          <div class="content column">

            <div class="info-view row">
            <?= $this->Html->image('profile.png', ['class' => 'user-picture']) ?>
              
              <div class="right-col column">
                <span class="title"><?= $user['nome'] ?></span>

              </div>
            </div>

          
          </div>

          <div class="content-edit column">
            <span class="email body"><?= $user['email'] ?></span>

            <div class="description">
              <span class="body">Sobre mim</span>

              <div class="border">
                <p>
                <?= $user['sobre'] ?>
                </p>
              </div>
            </div>
          </div>

        </div>
  
      </section>

      <section id="section2">
      <span class="title">Meus Podcasts</span>
      <div class="channels row">
     <?=  $this->Html->link(' <div class="channel-item">

<div class="header column">
<span class="title">'. $podcast['titulo'] .'</span>

<div class="stats row">
<div class="stats-item row">
<i class="icon far fa-flag"></i>
<span> 20k </span>
</div>
<div class="stats-item row">
<i class="icon fas fa-play-circle"></i>
<span> 2M </span>
</div>
</div>
</div>
<div class="description">
<p> ' . $podcast['descricao'] . '</p>
</div>
<div class="content">
'. $this->Html->image('../files/podcasts/' . $podcast['id'] . '/' . $podcast['capa']). '?>


</div>', 
['controller' => 'Podcasts', 'action' => 'listen'], 
['class' => 'login-btn', 'escape' => false])
         ?>

<?= $this->Html->link('<div class="add-item">
            <i class="icon fas fa-plus"></i>
            <span>adicionar novo</span>
          </div>', 
            ['controller' => 'Podcasts', 'action' => 'add'], 
            ['class' => 'login-btn', 'escape' => false]) ?>


    <div class="actions">
      <button class="button">
        <span>ver mais</span>
      </button>
    </div>
  </div>


          <?= $this->Html->link('<div class="add-item">
            <i class="icon fas fa-plus"></i>
            <span>adicionar novo</span>
          </div>', 
            ['controller' => 'Podcasts', 'action' => 'add'], 
            ['class' => 'login-btn', 'escape' => false]) ?>
          
        </div>
      </section>

      <div class="footer">
        <button class="regular-btn dark-btn transparent-btn">Sobre nós</button>
        <button class="regular-btn dark-btn transparent-btn">Suporte</button>
        <button class="regular-btn dark-btn transparent-btn">Termos e Privacidade</button>
      </div>

    </div>
</body>
</html>
