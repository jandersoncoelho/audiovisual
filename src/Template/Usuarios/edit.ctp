<?php
/**
  * @var \App\View\AppView $this
  */
?>

    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
        
    </ul>

<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Editar Usuário') ?></legend>
        
            <?=$this->Form->control('nome', ['class'=>'form-control']);?>
            <?=$this->Form->control('email', ['class'=>'form-control']);?>
            <?=$this->Form->control('password', ['class'=>'form-control']);?>
            
            
              <fieldset>
        <legend><?= __('Selecione o tipo do usuário') ?></legend>
        
       <?php
       echo $this->Form->radio(
    'tipo',
    [
        ['value' => 'administrador', 'text' => 'Administrador'],
        ['value' => 'atendente', 'text' => 'Atendente'],
        ['value' => 'solicitante', 'text' => 'Solicitante',],
    ]
);
            
        ?>
    </fieldset>
    
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>