<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="emprestimos form large-9 medium-8 columns content">
    <?= $this->Form->create($emprestimo) ?>
    <fieldset>
        <legend><?= __('Novo Empréstimo') ?></legend>

        <?php

            echo $this->Form->control('idEquipamento');
            echo $this->Form->control('idSolicitante');
            echo $this->Form->control('idAtendente', array('type' => 'hidden', 'value'=> $idLogado));
            echo $this->Form->control('situacao', array('type' => 'hidden', 'value' => 'pendente'));
            date_default_timezone_set('America/Sao_Paulo');
            $dataRetirada = date('Y-m-d H:i');
            echo $this->Form->control('dataRetirada', array('type' => 'hidden', 'value'=> $dataRetirada));

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
    <?= $this->Form->button(__('Emprestar')) ?>
    <?= $this->Form->end() ?>

</div>
