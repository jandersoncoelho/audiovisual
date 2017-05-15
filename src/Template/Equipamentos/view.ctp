<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="equipamentos view large-11 medium-8 columns content">
    <h3><?= h($equipamento->nome) ?></h3>
    <table class="vertical-table">
         <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($equipamento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($equipamento->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Número Patrimônio') ?></th>
            <td><?= h($equipamento->numeroPatrimonio) ?></td>
        </tr>
       
        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h(date('d/m/Y H:i', strtotime($equipamento->created))) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h(date('d/m/Y H:i', strtotime($equipamento->modified))) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Acessórios Relacionados') ?></h4>
        <?php if (!empty($equipamento->acessorios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('ID') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Criado') ?></th>
                <th scope="col"><?= __('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
            <?php foreach ($equipamento->acessorios as $acessorios): ?>
            <tr>
                <td><?= h($acessorios->id) ?></td>
                <td><?= h($acessorios->nome) ?></td>
                <td><?= h(date('d/m/Y H:i', strtotime($acessorios->created))) ?></td>
                <td><?= h(date('d/m/Y H:i', strtotime($acessorios->modified))) ?></td>
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
