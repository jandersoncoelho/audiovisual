<?php
/**
  * @var \App\View\AppView $this
  */
?>

    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index'], ['class'=> 'btn btn-sm btn-info']) ?></li>
    </ul>

<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Cadastrar Usuário') ?></legend>
        
            <?=$this->Form->control('nome', ['class'=>'form-control']);?>
            <?=$this->Form->control('email', ['class'=>'form-control']);?>
            <?=$this->Form->control('password', array('class'=>'form-control','label' => 'Senha' ));?>

            <fieldset>
        <legend><?= __('Selecione o tipo do usuário') ?></legend>
        

       <?php
       echo $this->Form->radio('tipo',[
        ['value' => 'Administrador', 'text' => 'Administrador'],
        ['value' => 'Atendente', 'text' => 'Atendente']
    ]
);
            
            ?>
        
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class'=> 'btn btn-lg btn-info']) ?>
    <?= $this->Form->end() ?>
</div>
