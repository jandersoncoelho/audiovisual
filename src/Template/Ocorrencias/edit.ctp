<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ocorrencias form large-9 medium-8 columns content">
    <?= $this->Form->create($ocorrencia) ?>
    <fieldset>
        <legend><?= __('Editar Ocorrência') ?></legend>
        <?php
            echo $this->Form->control('descricao', array('label' => 'Descrição'));
            echo $this->Form->control('providenciaTomada', array('label' => 'Providência Tomada'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
