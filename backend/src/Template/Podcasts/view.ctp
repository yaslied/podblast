<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Podcast $podcast
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Podcast'), ['action' => 'edit', $podcast->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Podcast'), ['action' => 'delete', $podcast->id], ['confirm' => __('Are you sure you want to delete # {0}?', $podcast->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Podcasts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Podcast'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="podcasts view large-9 medium-8 columns content">
    <h3><?= h($podcast->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($podcast->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($podcast->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capa') ?></th>
            <td><?= h($podcast->capa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arquivo') ?></th>
            <td><?= h($podcast->arquivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($podcast->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Canal Id') ?></th>
            <td><?= $this->Number->format($podcast->canal_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Ep') ?></th>
            <td><?= $this->Number->format($podcast->numero_ep) ?></td>
        </tr>
    </table>
</div>
