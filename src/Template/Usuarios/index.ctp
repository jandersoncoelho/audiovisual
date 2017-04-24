<?php
/**
  * @var \App\View\AppView $this
  */
?>

    <ul class="side-nav">    
        <li><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add'], ['class'=> 'btn btn-sm btn-info']) ?></li>
    </ul>

<div class="usuarios index large-11 medium-8 columns content">
    
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->id) ?></td>
                <td><?= h($usuario->nome) ?></td>
                <td><?= h($usuario->email) ?></td>
                <td><?= h($usuario->tipo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $usuario->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $usuario->id], ['confirm' => __('Tem certeza que deseja excluir este usuário # {0}?', $usuario->id)]) ?>
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
