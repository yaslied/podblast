<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Podcast $podcast
 */
?>
<?php $this->layout = false; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de mídia</title>
    <?= $this->Html->css('style-addEp.css') ?>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
    <script>
        function funcao1() {
            alert("Arquivo de mídia enviado!");
        }

        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-audio').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.audio-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.media-upload-wrap').show();
        }
        $('.audio-upload-wrap').bind('dragover', function () {
            $('.audio-upload-wrap').addClass('audio-dropping');
        });
        $('.audio-upload-wrap').bind('dragleave', function () {
            $('.audio-upload-wrap').removeClass('audio-dropping');
        });
    </script>
</head>

<body style="background-color: #292929">
    <!--Navbar-->
    <div class="upload">

        <nav class="nav-simple">
            <div class="identity">
            <?= $this->Html->image('logo.png', ['class' => 'logo', 'alt' => 'logo']) ?>
                <span>Pod<strong>blast</strong></span>
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
          <?= $user['nome'] ?>
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
            ['escape' => false]) ?>
        </div>
      </div>


        </nav>

        <!--Corpo da página-->
        <section id="page" class="">

        <?= $this->Html->link('<span>< Voltar</span>', 
            ['controller' => 'Usuarios', 'action' => 'profile'], 
            ['class' => 'voltar', 'escape' => false]) ?>

                    <div class="container">
<?= $this->Form->create($podcast, ['type' => 'file']) ?>
<div class="brand-content">
  <div class="media-box">

    <button class="addImg">
      <span class="legenda">adicionar capa</span>
      <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name = "capa" />
    </button>
  </div>

</div>
<div class="form">
  <span class="info">Informações do episódio</span>

  <div class="field-content titulo">
    <span>Título</span>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Título" aria-label="Título"
            aria-describedby="basic-addon1" style="background-color: transparent;" name = "titulo">
    </div>
  </div>

  <div class="field-content descricao">
    <span>Descrição</span>
    <div class="input-group mb-3">
        <textarea class="form-control" aria-label="Com textarea" aria-describedby="basic-addon1"
            style="background-color: transparent;" name = "descricao"></textarea>
    </div>
  </div>
<div class="file-upload field-content descricao">
<span>Episodio</span>
  <div class="audio-upload-wrap">
    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="audio/*" name="arquivo" />
  </div>
</div>


<!--Botão enviar-->
<?= $this->Form->button('Enviar', ['class' => 'btn enviar', 'type' => 'submit']) ?>
 <?= $this->Form->end() ?>

</div>

        </section>

</body>

</html>

