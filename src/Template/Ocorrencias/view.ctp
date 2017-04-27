<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ocorrencias view large-9 medium-8 columns content">
    <h3><?= h($ocorrencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Ocorrência') ?></th>
            <td><?= $this->Number->format($ocorrencia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Empréstimo') ?></th>
            <td><?= $this->Number->format($ocorrencia->idEmprestimo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($ocorrencia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($ocorrencia->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descrição') ?></h4>
        <?= $this->Text->autoParagraph(h($ocorrencia->descricao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Providência Tomada') ?></h4>
        <?= $this->Text->autoParagraph(h($ocorrencia->providenciaTomada)); ?>
    </div>
</div>
