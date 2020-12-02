<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Canai[]|\Cake\Collection\CollectionInterface $canais
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Canai'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="canais index large-9 medium-8 columns content">
    <h3><?= __('Canais') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_episodios') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($canais as $canai): ?>
            <tr>
                <td><?= $this->Number->format($canai->id) ?></td>
                <td><?= h($canai->titulo) ?></td>
                <td><?= h($canai->capa) ?></td>
                <td><?= $this->Number->format($canai->numero_episodios) ?></td>
                <td><?= $canai->has('usuario') ? $this->Html->link($canai->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $canai->usuario->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $canai->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $canai->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $canai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $canai->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
