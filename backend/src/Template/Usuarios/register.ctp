<?php $this->layout = false ?>
<?= $this->Form->create($usuario) ?>
<?= $this->Form->control('nome') ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('senha') ?>
<?= $this->Form->button('Entrar', ['class' => 'primary-action btn-login dark-btn']) ?>
<?= $this->Form->end() ?>