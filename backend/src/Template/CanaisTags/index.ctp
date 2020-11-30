<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CanaisTag[]|\Cake\Collection\CollectionInterface $canaisTags
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Canais Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="canaisTags index large-9 medium-8 columns content">
    <h3><?= __('Canais Tags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('canal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($canaisTags as $canaisTag): ?>
            <tr>
                <td><?= $this->Number->format($canaisTag->canal_id) ?></td>
                <td><?= $canaisTag->has('tag') ? $this->Html->link($canaisTag->tag->id, ['controller' => 'Tags', 'action' => 'view', $canaisTag->tag->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $canaisTag->canal_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $canaisTag->canal_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $canaisTag->canal_id], ['confirm' => __('Are you sure you want to delete # {0}?', $canaisTag->canal_id)]) ?>
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
