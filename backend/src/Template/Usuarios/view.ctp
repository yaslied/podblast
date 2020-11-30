<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canais'), ['controller' => 'Canais', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canai'), ['controller' => 'Canais', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img Perfil') ?></th>
            <td><?= h($usuario->img_perfil) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sobre') ?></th>
            <td><?= h($usuario->sobre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($usuario->senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Canais') ?></h4>
        <?php if (!empty($usuario->canais)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Capa') ?></th>
                <th scope="col"><?= __('Numero Episodios') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->canais as $canais): ?>
            <tr>
                <td><?= h($canais->id) ?></td>
                <td><?= h($canais->titulo) ?></td>
                <td><?= h($canais->capa) ?></td>
                <td><?= h($canais->numero_episodios) ?></td>
                <td><?= h($canais->usuario_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Canais', 'action' => 'view', $canais->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Canais', 'action' => 'edit', $canais->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Canais', 'action' => 'delete', $canais->id], ['confirm' => __('Are you sure you want to delete # {0}?', $canais->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
