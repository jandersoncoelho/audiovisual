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
            echo $this->Form->control('solicitante_id', array('type' => 'select', 'label' => 'Selecione o Solicitante', 'options' => $solicitantes ));

            echo $this->Form->control('equipamento_id', array('type' => 'select', 'label' => 'Selecione o Equipamento', 'options' => $equipamentos ));

            echo $this->Form->control('atendente_id', array('type' => 'hidden', 'value'=> $idLogado));
      
            echo $this->Form->control('situacao', array('type' => 'hidden', 'value' => 'Pendente'));

            date_default_timezone_set('America/Sao_Paulo');
            $dataRetirada = date('Y-m-d H:i');
            echo $this->Form->control('dataRetirada', array('type' => 'hidden', 'value'=> $dataRetirada));

            ?>

            <fieldset>
        <legend><?= __('Selecione os acessórios') ?></legend>

        <?php

            echo $this->Form->input('acessorios._ids', array('label' => false, 'div' => false,'type' => 'select','multiple'=>'checkbox','legend' => 'false'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Emprestar')) ?>
    <?= $this->Form->end() ?>

</div>
