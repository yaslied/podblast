<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Podcast $podcast
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Podcasts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="podcasts form large-9 medium-8 columns content">
    <?= $this->Form->create($podcast) ?>
    <fieldset>
        <legend><?= __('Add Podcast') ?></legend>
        <?php
            echo $this->Form->control('canal_id');
            echo $this->Form->control('numero_ep');
            echo $this->Form->control('titulo');
            echo $this->Form->control('descricao');
            echo $this->Form->control('capa');
            echo $this->Form->control('arquivo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
