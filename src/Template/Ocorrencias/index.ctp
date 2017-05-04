<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ocorrencias index large-11 medium-8 columns content">
    <h3><?= __('Ocorrências') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID Ocorrência') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ID Empréstimo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ocorrencias as $ocorrencia): ?>
            <tr>
                <td><?= $this->Number->format($ocorrencia->id) ?></td>
                <td><?= $this->Number->format($ocorrencia->idEmprestimo) ?></td>
                <td><?= h($ocorrencia->created) ?></td>
                <td><?= h($ocorrencia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $ocorrencia->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ocorrencia->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $ocorrencia->id], ['confirm' => __('Tem certeza que deseja exluir esta ocorrência # {0}?', $ocorrencia->id)]) ?>
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
