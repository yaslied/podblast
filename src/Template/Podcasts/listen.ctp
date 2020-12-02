<?php $this->layout = false; ?>
<html>
  <head>
    <title>Listening</title>
    <meta charset="UTF-8">
    <link rel="favicon" href="favicon.ico" />
    <?= $this->Html->css('style-listen.css') ?>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script type="text/javascript" src="./controler.js"></script>
  </head>

  <body>
    <div class="perfil-template">

      <nav class="nav-withList">

        <div class="identity">
          <!-- <img class="logo" src="../../../img/logo@2x.jpg" alt="logo"> -->
          <?= $this->Html->link('<svg width="69" height="51" viewBox="0 0 69 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M69 25.5C59.0962 26.8829 60.9763 37.2238 58.3194 37.2238C56.2892 37.2238 56.5452 29.0497 54.162 29.0497C51.7787 29.0497 51.0637 45.7679 48.0184 45.7679C44.9731 45.7679 43.958 27.887 42.378 27.887C40.798 27.887 39.7564 42.5617 37.532 42.5793C35.2988 42.5969 34.7251 27.7725 32.2977 27.7725C29.8703 27.7725 30.038 51 26.8868 51C23.7356 51 23.1707 27.8606 20.7609 27.8606C18.36 27.8606 17.4332 37.2855 15.8267 37.2855C12.2782 37.2855 16.6211 26.328 0 25.5C9.83318 24.1523 8.70334 13.5912 10.9277 13.5912C13.4081 13.5912 12.9138 21.871 15.0411 21.871C17.7509 21.8798 18.5277 0 21.6789 0C24.8301 0 24.6536 23.2275 27.0898 23.2275C29.5172 23.2275 30.091 8.40311 32.3242 8.42072C34.5574 8.43834 35.5901 23.113 37.1701 23.113C38.7502 23.113 39.7653 5.23212 42.8105 5.23212C45.8558 5.23212 46.1118 23.3684 48.9541 23.3684C51.1078 23.3684 51.0637 13.7762 53.1116 13.7762C55.7685 13.7762 53.8883 24.1083 63.7921 25.5H69Z" fill="url(#paint0_linear)"/>
            <defs>
            <linearGradient id="paint0_linear" x1="11.2527" y1="41.3932" x2="56.1952" y2="6.02558" gradientUnits="userSpaceOnUse">
            <stop offset="0.0395101" stop-color="#9B00FF"/>
            <stop offset="0.4757" stop-color="#F900F9"/>
            <stop offset="1" stop-color="#FFCE00"/>
            </linearGradient>
            </defs>
            </svg>', 
            ['controller' => 'Usuarios', 'action' => 'profile'], 
            ['class' => 'login-btn', 'escape' => false]) ?>
          <span class="brand">Pod<strong>blast</strong></span>
        </div>
  
        <div class="right-area">
        <?= $this->Html->image('icon.png', ['class' => 'user-icon', 'alt' => 'ícone perfil']) ?>

          <button>
            <span><?= $user['nome'] ?></span>
            <i class="btn-icon fas fa-chevron-down"></i>
          </button>
        </div>
      </nav>

      <section id="section1" class="img-background" style="background-color: #202022;">

        <div class="container column">

          <div class="first-line column">
          <?= $this->Html->link('<button class="button back" data-icon="B" aria-label="rewind">
              <i class="icon fas fa-chevron-left"></i>
              <span>voltar</span>
            </button>', 
            ['controller' => 'Usuarios', 'action' => 'profile'], 
            ['class' => 'login-btn', 'escape' => false]) ?>
            

            <span class="subtitle">Ouvindo agora</span>
          </div>
          
          <div class="content column">
            <div class="brand">
            <?= $this->Html->image('../files/podcasts/' . $podcast['id'] . '/' . $podcast['capa']) ?>
            </div>

            <div class="card column">
              <span class="overline"><?= $podcast['titulo'] ?></span>
              <span class="title"><?= $podcast['descricao'] ?></span>
            </div>

            <div class="player">
            <audio id="audio" controls preload="metadata" src=" <?= 'files/podcasts/' . $podcast['id'] . '/' . $podcast['arquivo'] ?>" title="Investe em mim"></audio>

              
              <div class="controls">
                <div class="timer">
                  <div class="slider"></div>
                  <span class="count" aria-label="timer">00:00:00</span>
                </div>

                <div class="actions">

                  <div class="buttons-left">
                    <button class="button vol-down" data-icon="B" aria-label="rewind">
                      <i class="icon fas fa-volume-down"></i>
                    </button>
                    <div class="vol-slider"></div>
                    <button class="button vol-up" data-icon="S" aria-label="stop">
                      <i class="icon fas fa-volume-up"></i>
                    </button>
                  </div>
                  
                  <div class="buttons-center">
                    <button class="button undo" data-icon="B" aria-label="rewind">
                      <i class="icon fas fa-backward"></i>
                      <span>10s</span>
                    </button>
                    <button id="pause" class="button stop" data-icon="S" aria-label="stop">
                      <i class="icon large fas fa-pause"></i>
                    </button>
                    <button id="play" class="button play" data-icon="P" aria-label="play pause toggle">
                      <i class="icon large fas fa-play"></i>
                    </button>
                    <button class="button redo" data-icon="F" aria-label="fast forward">
                      <i class="icon fas fa-forward"></i>
                      <span>30s</span>
                    </button>
                  </div>

                  <div class="buttons-right">
                    <button class="button download" data-icon="B" aria-label="rewind">
                      <i class="icon fas fa-download"></i>
                      <span>download</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</body>
</html>