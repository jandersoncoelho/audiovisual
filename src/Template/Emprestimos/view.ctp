<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="emprestimos view large-11 medium-8 columns content">
    <h3><?= h($emprestimo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NomeDevolveu') ?></th>
            <td><?= h($emprestimo->nomeDevolveu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ocorrencia') ?></th>
            <td><?= h($emprestimo->ocorrencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situacao') ?></th>
            <td><?= h($emprestimo->situacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($emprestimo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAtendente') ?></th>
            <td><?= $this->Number->format($emprestimo->idAtendente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdSolicitante') ?></th>
            <td><?= $this->Number->format($emprestimo->idSolicitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdEquipamento') ?></th>
            <td><?= $this->Number->format($emprestimo->idEquipamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataRetirada') ?></th>
            <td><?= h($emprestimo->dataRetirada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataDevolucao') ?></th>
            <td><?= h($emprestimo->dataDevolucao) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Acessórios Relacionados') ?></h4>
        <?php if (!empty($emprestimo->acessorios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($emprestimo->acessorios as $acessorios): ?>
            <tr>
                <td><?= h($acessorios->id) ?></td>
                <td><?= h($acessorios->nome) ?></td>
                <td><?= h($acessorios->created) ?></td>
                <td><?= h($acessorios->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['controller' => 'Acessorios', 'action' => 'view', $acessorios->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Acessorios', 'action' => 'edit', $acessorios->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Acessorios', 'action' => 'delete', $acessorios->id], ['confirm' => __('Tem certeza que deseja excluir este acessório # {0}?', $acessorios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
