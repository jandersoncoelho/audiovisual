<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="acessorios view large-11 medium-8 columns content">
    <h3><?= h($acessorio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($acessorio->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($acessorio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($acessorio->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($acessorio->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Empréstimos Relacionados') ?></h4>
        <?php if (!empty($acessorio->emprestimos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('IdAtendente') ?></th>
                <th scope="col"><?= __('IdSolicitante') ?></th>
                <th scope="col"><?= __('IdEquipamento') ?></th>
                <th scope="col"><?= __('DataRetirada') ?></th>
                <th scope="col"><?= __('DataDevolucao') ?></th>
                <th scope="col"><?= __('Situacao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($acessorio->emprestimos as $emprestimos): ?>
            <tr>
                <td><?= h($emprestimos->idAtendente) ?></td>
                <td><?= h($emprestimos->idSolicitante) ?></td>
                <td><?= h($emprestimos->idEquipamento) ?></td>
                <td><?= h($emprestimos->dataRetirada) ?></td>
                <td><?= h($emprestimos->dataDevolucao) ?></td>
                <td><?= h($emprestimos->situacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['controller' => 'Emprestimos', 'action' => 'view', $emprestimos->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Emprestimos', 'action' => 'edit', $emprestimos->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Emprestimos', 'action' => 'delete', $emprestimos->id], ['confirm' => __('Tem certeza que deseja excluir este empréstimo # {0}?', $emprestimos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Equipamentos Relacionados') ?></h4>
        <?php if (!empty($acessorio->equipamentos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('NumeroPatrimonio') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($acessorio->equipamentos as $equipamentos): ?>
            <tr>
                <td><?= h($equipamentos->nome) ?></td>
                <td><?= h($equipamentos->numeroPatrimonio) ?></td>
                <td><?= h($equipamentos->created) ?></td>
                <td><?= h($equipamentos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['controller' => 'Equipamentos', 'action' => 'view', $equipamentos->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Equipamentos', 'action' => 'edit', $equipamentos->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Equipamentos', 'action' => 'delete', $equipamentos->id], ['confirm' => __('Tem certeza que deseja excluir este equipamento # {0}?', $equipamentos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
