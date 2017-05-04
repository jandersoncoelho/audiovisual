<?php
/**
  * @var \App\View\AppView $this
  */
?>
<ul class="side-nav">    
        <li><?= $this->Html->link(__('Novo Empréstimo'), ['action' => 'add']) ?></li>
    </ul>

<div class="emprestimos index large-12 medium-9 columns content">
    <h3><?= __('Empréstimos Finalizados') ?></h3>
    <table cellspacing="0">
        <thead>
            <tr>
             
                <th scope="col"><?= $this->Paginator->sort('nomeAtendente', array('label' => 'Atendente' )) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nomeSolicitante', array('label' => 'Solicitante' )) ?></th>
                <th scope="col"><?= $this->Paginator->sort('numeroPatrimonio', array('label' => 'Número Patrimônio' )) ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataDevolucao', array('label' => 'Devolução' )) ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($devolvidos as $emprestimo): ?>
            <tr>
              
                <td><?= h($emprestimo->nomeAtendente) ?></td>
                <td><?= h($emprestimo->nomeSolicitante) ?></td>
                <td><?= h($emprestimo->numeroPatrimonio) ?></td>
                <td><?= h($emprestimo->dataDevolucao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $emprestimo->id]) ?>
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
