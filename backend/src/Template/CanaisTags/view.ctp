<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CanaisTag $canaisTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Canais Tag'), ['action' => 'edit', $canaisTag->canal_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Canais Tag'), ['action' => 'delete', $canaisTag->canal_id], ['confirm' => __('Are you sure you want to delete # {0}?', $canaisTag->canal_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Canais Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canais Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="canaisTags view large-9 medium-8 columns content">
    <h3><?= h($canaisTag->canal_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $canaisTag->has('tag') ? $this->Html->link($canaisTag->tag->id, ['controller' => 'Tags', 'action' => 'view', $canaisTag->tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Canal Id') ?></th>
            <td><?= $this->Number->format($canaisTag->canal_id) ?></td>
        </tr>
    </table>
</div>
