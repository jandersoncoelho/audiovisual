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
    <h3><?= h($usuario->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= h($usuario->id) ?></td>
        </tr>
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
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h(date('d/m/Y H:i', strtotime($usuario->created))) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h(date('d/m/Y H:i', strtotime($usuario->modified))) ?></td>
        </tr>
    </table>
</div>
