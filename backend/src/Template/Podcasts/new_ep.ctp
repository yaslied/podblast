<?php $this->layout = false; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de mídia</title>
    <?= $this->Html->css('style-newEp.css') ?>
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

            <a href="" class="favorites" style="color: blueviolet;">Favoritos</a>

            <?= $this->Html->link('<span>Descobrir</span>', 
            ['controller' => 'Canais', 'action' => 'discover'], 
            ['class' => 'library', 'style' => 'color: blueviolet; text-align: right;', 'escape' => false]) ?>


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
            ['escape' => false]) ?>
        </div>
      </div>


        </nav>

        <!--Corpo da página-->
        <section id="page" class="">

        <?= $this->Html->link('<span>< Voltar</span>', 
            ['controller' => 'Usuarios', 'action' => 'profile'], 
            ['class' => 'voltar', 'escape' => false]) ?>

                    <h1 class="big-title">Nome da mídia</h1>

                    <h4 class="subtitle">Nome do usuário</h4>

                    <div class="media-box">
                    <?= $this->Html->image('Nerdcast_-_2006 1.png', ['class' => 'image-podcast', 'alt' => 'image']) ?>
                        <p class="legenda">Capa do episódio</p>
                    </div>

                    <span class="info">
                        Informações do episódio
                    </span>

                    <div class="container">
                    <?= $this->Form->create() ?>
                        <div class="titulo">
                            <span>
                                Título
                            </span>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Título" aria-label="Título"
                                    aria-describedby="basic-addon1" style="background-color: transparent;" name="titulo">
                            </div>
                        </div>

                        <div class="descricao">
                            <span>
                                Descrição
                            </span>
                            <div class="input-group mb-3">
                                <textarea class="form-control" aria-label="Com textarea" aria-describedby="basic-addon1"
                                    style="background-color: transparent;" name = "descricao"></textarea>
                            </div>
                        </div>
                    </div>

                    <!--Upload do arquivo-->
                    
                    <div class="file-upload">
                        <div class="audio-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="audio/*" name="arquivo" />
                            <div class="drag-text">
                                <h1>+</h1>
                                <h5>Adicionar arquivo de áudio</h5>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-audio" src="#" alt="your audio" />
                            <div class="audio-title-wrap">
                                <button type="button" onclick="removeUpload()" class="remove-media">Remove <span
                                        class="audio-title">Uploaded Audio</span></button>
                            </div>
                        </div>
                    </div>

                    <!--Selecionar qualidade-->
                    <div class="dropdown qualidade">
                        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Qualidade
                        </button>
                        <div class="dropdown-content" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Alta(96kbps)</a>
                            <a class="dropdown-item" href="index.html">Media</a>
                            <a class="dropdown-item" href="index.html">Baixa(24kbps)</a>
                        </div>
                    </div>

                    <!--Botão enviar-->
                    <?= $this->Form->button('Enviar', ['class' => 'btn enviar', 'type' => 'button', 'onclick' => 'funcao1()']) ?>
                    <?= $this->Form->end() ?>

        </section>

</body>

</html>