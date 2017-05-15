<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="acessorios view large-11 medium-8 columns content">
    <h3><?= h($acessorio->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($acessorio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($acessorio->nome) ?></td>
        </tr>  
        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h(date('d/m/Y H:i', strtotime($acessorio->created))) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
                <td><?= h(date('d/m/Y H:i', strtotime($acessorio->modified))) ?></td>
        </tr>
    </table>
   
    <div class="related">
        <h4><?= __('Equipamentos Relacionados') ?></h4>
        <?php if (!empty($acessorio->equipamentos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Número Patrimônio') ?></th>
                <th scope="col"><?= __('Criado') ?></th>
                <th scope="col"><?= __('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
            <?php foreach ($acessorio->equipamentos as $equipamentos): ?>
            <tr>
                <td><?= h($equipamentos->nome) ?></td>
                <td><?= h($equipamentos->numeroPatrimonio) ?></td>
                <td><?= h(date('d/m/Y H:i', strtotime($equipamentos->created))) ?></td>
                <td><?= h(date('d/m/Y H:i', strtotime($equipamentos->modified))) ?></td>
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
