<?php
/**
  * @var \App\View\AppView $this
  */
?>
<ul class="side-nav">    
    <?php if ($emprestimo->situacao == 'Pendente') { ?>
    
        <li><?= $this->Html->link(__('Devolver'), ['action' => 'finish', $emprestimo->id]) ?></li>
        <?php } ?>

        <li><?= $this->Html->link(__('Adicionar Ocorrência'), ['controller'=> 'Ocorrencias', 'action' => 'add', $emprestimo->id]) ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $emprestimo->id]) ?></li>
        <li><?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Tem certeza que deseja excluir este empréstimo # {0}?', $emprestimo->id)]) ?></li>
    </ul>

<div class="emprestimos view large-11 medium-8 columns content">
    <h3><?= h($emprestimo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Empréstimo') ?></th>
            <td><?= $this->Number->format($emprestimo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Devolveu') ?></th>
            <td><?= h($emprestimo->nomeDevolveu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsável pela Devolução') ?></th>
            <td><?= h($emprestimo->nomeResponsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situação') ?></th>
            <td><?= h($emprestimo->situacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atendente') ?></th>
            <td><?= h($emprestimo->nomeAtendente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Solicitante') ?></th>
            <td><?= h($emprestimo->nomeSolicitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Número Patrimônio') ?></th>
            <td><?= h($emprestimo->numeroPatrimonio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Retirada') ?></th>
            <td><?= h($emprestimo->dataRetirada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Devolução') ?></th>
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
                <th scope="col"><?= __('Criado') ?></th>
                <th scope="col"><?= __('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
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

   <div class="related">
        <h4><?= __('Ocorrências Relacionadas') ?></h4>
        <?php if (!empty($emprestimo->ocorrencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Ocorrência') ?></th>
                <th scope="col"><?= __('Id Empréstimo') ?></th>
                <th scope="col"><?= __('Descrição') ?></th>
                <th scope="col"><?= __('Providência') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
            <?php foreach ($emprestimo->ocorrencias as $ocorrencias): ?>
            <tr>
                <td><?= h($ocorrencias->id) ?></td>
                <td><?= h($ocorrencias->idEmprestimo) ?></td>
                <td><?= h($ocorrencias->descricao) ?></td>
                <td><?= h($ocorrencias->providenciaTomada) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencias->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencias->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
