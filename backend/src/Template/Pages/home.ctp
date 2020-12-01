<?php $this->layout = false ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this->Html->css('main.css') ?>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

    <div class="landing-template">

        <nav class="nav-simple">
            <div class="identity">
            <?= $this->Html->image('logo.png', ['class' => 'logo', 'alt' => 'logo']) ?>
                <span>Pod<strong>blast</strong></span>
            </div>

            <div class="icon-perfil">
            <?= $this->Html->image('icon.png', ['class' => 'user-icon', 'alt' => 'ícone perfil']) ?>
            </div>

            <?= $this->Html->link('<button class="login-btn"><span class="body">login</span></button>', 
            ['controller' => 'Usuarios', 'action' => 'login'], 
            ['class' => 'login-btn', 'escape' => false]) ?>
        </nav>

        <section id="section1" class="section img-background">

            <div class="container">

                <div class="content">
                    <span class="big-title">Pod<strong>blast</strong></span>
                    <span class="subtible">Um lugar especial para seus podcasts</span>
                    <p class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias suscipit officiis
                        amet vitae a quod, dicta debitis, reprehenderit assumenda sapiente incidunt illum placeat ducimus dolores,
                        dignissimos quisquam excepturi hic voluptatibus.</p>
                </div>

                <div class="media-row">
                    <div class="media-row-item">
                        <i class="row-item-icon fas fa-podcast"></i>
                        <span class="row-item-text">Encontre seus podcasts favoritos</span>
                    </div>
                    <div class="media-row-item">
                        <i class="row-item-icon fas fa-download"></i>
                        <span class="row-item-text">Faça dowloads para ouvir quando quiser</span>
                    </div>
                    <div class="media-row-item">
                        <i class="row-item-icon fas fa-play-circle"></i>
                        <span class="row-item-text">Crie seu canal e comece a postar</span>
                    </div>
                </div>

            </div>

        </section>

        <section id="section2" class="section">

            <div class="container column al-it-center">

                <div class="identity row">
                <?= $this->Html->image('logo.png', ['class' => 'logo', 'alt' => 'logo']) ?>
                    <span>Pob<strong>blast</strong></span>
                </div>

                <div class="content">
                    <p class="p">
                        Lorem ipsum ut sit est neque vehicula eleifend dui feugiat tristique, fames lacinia hendrerit convallis
                        cursus auctor porttitor sagittis vulputate, semper nisi curabitur vestibulum cubilia in augue consequat
                        elementum.
                    </p>

                    <p class="p">
                        Lorem ipsum ut sit est neque vehicula eleifend dui feugiat tristique, fames lacinia hendrerit convallis
                        cursus auctor porttitor sagittis vulputate, semper nisi curabitur vestibulum cubilia in augue consequat
                        elementum.
                    </p>

                </div>

                <div class="gallery row">

                    <div class="media-box">
                    <?= $this->Html->image('Nerdcast_-_2006 1.png', ['class' => 'image-podcast', 'alt' => 'image']) ?>
                    </div>
                    <div class="media-box">
                    <?= $this->Html->image('Nerdcast_-_2006 1.png', ['class' => 'image-podcast', 'alt' => 'image']) ?>
                    </div>
                    <div class="media-box">
                    <?= $this->Html->image('Nerdcast_-_2006 1.png', ['class' => 'image-podcast', 'alt' => 'image']) ?>
                    </div>
                    <div class="media-box">
                    <?= $this->Html->image('Nerdcast_-_2006 1.png', ['class' => 'image-podcast', 'alt' => 'image']) ?>
                    </div>

                </div>

            </div>

            <div class="footer absolute-bottom row al-it-center">
                <button class="regular-btn dark-btn transparent-btn">Sobre nós</button>
                <button class="regular-btn dark-btn transparent-btn">Suporte</button>
                <button class="regular-btn dark-btn transparent-btn">Termos e Privacidade</button>
            </div>

        </section>

    </div>
</body>

</html>