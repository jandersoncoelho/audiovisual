<?php
/**
  * @var \App\View\AppView $this
  */
?>

<ul class="side-nav">
        
        <li><?= $this->Html->link(__('Listar Acessórios'), ['action' => 'index']) ?></li>
    </ul>

<div class="acessorios form large-9 medium-8 columns content">
    <?= $this->Form->create($acessorio) ?>
    <fieldset>
        <legend><?= __('Editar Acessório') ?></legend>
        <?php
            echo $this->Form->control('nome');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
