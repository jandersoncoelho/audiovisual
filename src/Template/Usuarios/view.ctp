<?php
/**
  * @var \App\View\AppView $this
  */
?>
<ul class="side-nav">    
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->id]) ?></li>
        <li><?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $usuario->id], ['confirm' => __('Tem certeza que deseja excluir este usuário # {0}?', $usuario->id)]) ?></li>
    </ul>

<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($usuario->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($usuario->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($usuario->modified) ?></td>
        </tr>
    </table>
</div>
