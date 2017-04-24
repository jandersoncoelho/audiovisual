<?php
/**
  * @var \App\View\AppView $this
  */
?>
<ul class="side-nav">    
        <li><?= $this->Html->link(__('Novo Empréstimo'), ['action' => 'add']) ?></li>
    </ul>

<div class="emprestimos index large-11 medium-9 columns content">
    <table cellspacing="0">
        <thead>
            <tr>
             
                <th scope="col"><?= $this->Paginator->sort('idAtendente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idSolicitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idEquipamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataRetirada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situacao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emprestimos as $emprestimo): ?>
            <tr>
              
                <td><?= $this->Number->format($emprestimo->idAtendente) ?></td>
                <td><?= $this->Number->format($emprestimo->idSolicitante) ?></td>
                <td><?= $this->Number->format($emprestimo->idEquipamento) ?></td>
                <td><?= h($emprestimo->dataRetirada) ?></td>
                <td><?= h($emprestimo->situacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $emprestimo->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $emprestimo->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Tem certeza que deseja excluir este emprestimo # {0}?', $emprestimo->id)]) ?>
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
