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
             
                <th scope="col"><?= $this->Paginator->sort('atendente_id', array('label' => 'Atendente' )) ?></th>
                <th scope="col"><?= $this->Paginator->sort('solicitante_id', array('label' => 'Solicitante' )) ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipamento_id', array('label' => 'Número Patrimônio' )) ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataDevolucao', array('label' => 'Devolução' )) ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($devolvidos as $emprestimo): ?>
            <tr>
              
                 <td><?= $emprestimo->has('usuario') ? $this->Html->link($emprestimo->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $emprestimo->usuario->id]) : '' ?></td>

                <td><?= $emprestimo->has('solicitante') ? $this->Html->link($emprestimo->solicitante->nome, ['controller' => 'Solicitantes', 'action' => 'view', $emprestimo->solicitante->id]) : '' ?></td>

                <td><?= $emprestimo->has('equipamento') ? $this->Html->link($emprestimo->equipamento->numeroPatrimonio, ['controller' => 'Equipamentos', 'action' => 'view', $emprestimo->equipamento->id]) : '' ?></td>
                <td><?= h(date('d/m/Y H:i', strtotime($emprestimo->dataDevolucao))) ?></td>
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
