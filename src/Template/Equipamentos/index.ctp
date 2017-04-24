<?php
/**
  * @var \App\View\AppView $this
  */
?>

<ul class="side-nav">    
        <li><?= $this->Html->link(__('Novo Equipamento'), ['action' => 'add']) ?></li>
    </ul>

<div class="equipamentos index large-11 medium-8 columns content">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numeroPatrimonio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipamentos as $equipamento): ?>
            <tr>
                <td><?= $this->Number->format($equipamento->id) ?></td>
                <td><?= h($equipamento->nome) ?></td>
                <td><?= h($equipamento->numeroPatrimonio) ?></td>
                <td><?= h($equipamento->created) ?></td>
                <td><?= h($equipamento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $equipamento->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $equipamento->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $equipamento->id], ['confirm' => __('Tem certeza que deseja excluir este equipamento # {0}?', $equipamento->id)]) ?>
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
