<?php
/**
  * @var \App\View\AppView $this
  */
?>
<ul class="side-nav">
        
        <li><?= $this->Html->link(__('Novo Solicitante'), ['action' => 'add'], ['class'=> 'btn btn-sm btn-info']) ?></li>
    </ul>
<div class="solicitantes index large-11 medium-8 columns content">
    <h3><?= __('Solicitantes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Matrícula') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solicitantes as $solicitante): ?>
            <tr>
                <td><?= h($solicitante->nome) ?></td>
                <td><?= h($solicitante->email) ?></td>
                <td><?= h($solicitante->matricula) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $solicitante->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $solicitante->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $solicitante->id], ['confirm' => __('Tem certeza que deseja excluir este solicitante # {0}?', $solicitante->id)]) ?>
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
