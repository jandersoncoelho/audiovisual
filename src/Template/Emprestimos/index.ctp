<?php
/**
  * @var \App\View\AppView $this
  */
?>
<ul class="side-nav">    
        <li><?= $this->Html->link(__('Novo Empréstimo'), ['action' => 'add']) ?></li>
    </ul>

<div class="emprestimos index large-11 medium-9 columns content">
    <h3><?= __('Empréstimos Pendentes') ?></h3>
    <table cellspacing="0">
        <thead>
            <tr>  
                <th scope="col"><?= $this->Paginator->sort('nomeAtendente', array('' => 'Atendente' )) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nomeSolicitante', array('' => 'Solicitante' )) ?></th>
                <th scope="col"><?= $this->Paginator->sort('numeroPatrimonio', array('' => 'Número Patrimônio' )) ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataRetirada', array('' => 'Retirada' )) ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pendentes as $emprestimo): 
            if ($emprestimo->situacao == 'Pendente') { ?>
            <tr>
              
                <td><?= h($emprestimo->nomeAtendente) ?></td>
                <td><?= h($emprestimo->nomeSolicitante) ?></td>
                <td><?= $emprestimo->has('equipamento') ? $this->Html->link($emprestimo->equipamento->numeroPatrimonio, ['controller' => 'Equipamentos', 'action' => 'view', $emprestimo->equipamento->id]) : '' ?></td>
                <td><?= h($emprestimo->dataRetirada) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Devolver'), ['action' => 'finish', $emprestimo->id]) ?>
                    <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $emprestimo->id]) ?>
                
                </td>
            </tr>
            <?php } ?>
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
