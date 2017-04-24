<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="equipamentos view large-11 medium-8 columns content">
    <h3><?= h($equipamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($equipamento->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NumeroPatrimonio') ?></th>
            <td><?= h($equipamento->numeroPatrimonio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($equipamento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($equipamento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($equipamento->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Acessórios Relacionados') ?></h4>
        <?php if (!empty($equipamento->acessorios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($equipamento->acessorios as $acessorios): ?>
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
