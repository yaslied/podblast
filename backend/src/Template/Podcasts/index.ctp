<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Podcast[]|\Cake\Collection\CollectionInterface $podcasts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Podcast'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="podcasts index large-9 medium-8 columns content">
    <h3><?= __('Podcasts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_ep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arquivo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($podcasts as $podcast): ?>
            <tr>
                <td><?= $this->Number->format($podcast->id) ?></td>
                <td><?= $this->Number->format($podcast->canal_id) ?></td>
                <td><?= $this->Number->format($podcast->numero_ep) ?></td>
                <td><?= h($podcast->titulo) ?></td>
                <td><?= h($podcast->descricao) ?></td>
                <td><?= h($podcast->capa) ?></td>
                <td><?= h($podcast->arquivo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $podcast->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $podcast->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $podcast->id], ['confirm' => __('Are you sure you want to delete # {0}?', $podcast->id)]) ?>
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
