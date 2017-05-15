<?php
/**
  * @var \App\View\AppView $this
  */
?>

<ul class="side-nav">    
        <li><?= $this->Html->link(__('Novo Acessório'), ['action' => 'add']) ?></li>
    </ul>

<div class="acessorios index large-11 medium-8 columns content">
    <h3><?= __('Acessórios') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($acessorios as $acessorio): ?>
            <tr>
                <td><?= $this->Number->format($acessorio->id) ?></td>
                <td><?= h($acessorio->nome) ?></td>
                <td><?= h(date('d/m/Y H:i', strtotime($acessorio->created))) ?></td>
                <td><?= h(date('d/m/Y H:i', strtotime($acessorio->modified))) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $acessorio->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $acessorio->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $acessorio->id], ['confirm' => __('Tem certeza que deseja excluir este acessório # {0}?', $acessorio->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de um total de {{count}}')]) ?></p>
    </div>
</div>
