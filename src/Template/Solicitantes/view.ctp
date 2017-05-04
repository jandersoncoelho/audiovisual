<?php
/**
  * @var \App\View\AppView $this
  */
?>
<ul class="side-nav">    
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $solicitante->id]) ?></li>
        <li><?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $solicitante->id], ['confirm' => __('Tem certeza que deseja excluir este usuário # {0}?', $solicitante->id)]) ?></li>
    </ul>
<div class="solicitantes view large-9 medium-8 columns content">
    <h3><?= h($solicitante->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= h($solicitante->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($solicitante->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CPF') ?></th>
            <td><?= h($solicitante->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matrícula') ?></th>
            <td><?= h($solicitante->matricula) ?></td>
        </tr>
          <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($solicitante->email) ?></td>
        </tr>
          <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($solicitante->created) ?></td>
        </tr>
          <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($solicitante->modified) ?></td>
        </tr>
    </table>
</div>
