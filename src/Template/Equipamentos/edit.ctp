<?php
/**
  * @var \App\View\AppView $this
  */
?>

<ul class="side-nav">
        
        <li><?= $this->Html->link(__('Listar Equipamentos'), ['action' => 'index']) ?></li>
    </ul>

<div class="equipamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($equipamento) ?>
    <fieldset>
        <legend><?= __('Editar Equipamento') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('numeroPatrimonio');

            ?>
            <fieldset>
             <legend><?= __('Selecione os acessórios') ?></legend>
             <?php
             echo $this->Form->input('acessorios._ids', array('label' => false,
                                        'div' => false,
                                        'type' => 'select',
                                        'multiple'=>'checkbox',
                                        'legend' => 'false',
                                        'options' => $acessorios
                                                                ));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
