<?php
/**
  * @var \App\View\AppView $this
  */
?>
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Listar Solicitantes'), ['action' => 'index'], ['class'=> 'btn btn-sm btn-info']) ?></li>
    </ul>
<div class="solicitantes form large-9 medium-8 columns content">
    <?= $this->Form->create($solicitante) ?>
    <fieldset>
        <legend><?= __('Cadastrar Solicitante') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('cpf', array('type' => 'text', 'label' => 'CPF'));
            echo $this->Form->control('matricula', array('type' => 'text', 'label' => 'Matrícula' ));
            echo $this->Form->control('email');
            echo $this->Form->control('password', array('label' => 'Senha' ));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
