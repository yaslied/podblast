<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Canai $canai
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Canai'), ['action' => 'edit', $canai->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Canai'), ['action' => 'delete', $canai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $canai->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Canais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canai'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="canais view large-9 medium-8 columns content">
    <h3><?= h($canai->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($canai->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capa') ?></th>
            <td><?= h($canai->capa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $canai->has('usuario') ? $this->Html->link($canai->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $canai->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($canai->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Episodios') ?></th>
            <td><?= $this->Number->format($canai->numero_episodios) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tags') ?></h4>
        <?php if (!empty($canai->tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Capa') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($canai->tags as $tags): ?>
            <tr>
                <td><?= h($tags->id) ?></td>
                <td><?= h($tags->titulo) ?></td>
                <td><?= h($tags->capa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
