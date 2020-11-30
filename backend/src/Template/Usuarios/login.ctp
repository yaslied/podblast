<?php $this->layout = false; ?>
<html>
  <head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="favicon" href="favicon.jpg" />
    <!-- <link rel="style" href="../scss/main.scss"> -->
    <?= $this->Html->css('main.css') ?>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </head>

  <body>
    <div class="poblast-page">

      <nav class="nav-simple">
        <div class="identity">
        <?= $this->Html->image('logo@2x.jpg', ['class' => 'logo', 'alt' => 'logo']) ?>
          <span>Pob<strong>blast</strong></span>
        </div>
  
        <i class="user-icon fas fa-user-alt"></i>
      </nav>

      <section id="section1" class="section img-background">
 
        <div class="container">
  
          <div class="content">
          <?= $this->Form->create() ?>

            <p><span class="title">Bem vindo de volta</span></p>
            <span class="subtible">um lugar especial para seus podcasts</span>

            <input type="email" class="input" name="email">
            <input type="password" class="input" name="senha">

            <input type="checkbox" class="input">

            <?= $this->Form->button('Entrar', ['class' => 'primary-action btn-login dark-btn']) ?>
            <?= $this->Form->end() ?>

            <span class="body">Ainda nao é cadastrado?</span>
            <span class="body">Crie sua conta</span>
            
          </div>

          <span class="body">terms and privacity</span>
  
        </div>
  
      </section>

      <div class="footer absolute-bottom row al-it-center">
        <button class="regular-btn dark-btn transparent-btn">Sobre nós</button>
        <button class="regular-btn dark-btn transparent-btn">Suporte</button>
        <button class="regular-btn dark-btn transparent-btn">Termos e Privacidade</button>
      </div>

    </div>
</body>
</html>
