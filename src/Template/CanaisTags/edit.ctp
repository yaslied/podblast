<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CanaisTag $canaisTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $canaisTag->canal_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $canaisTag->canal_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Canais Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="canaisTags form large-9 medium-8 columns content">
    <?= $this->Form->create($canaisTag) ?>
    <fieldset>
        <legend><?= __('Edit Canais Tag') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
