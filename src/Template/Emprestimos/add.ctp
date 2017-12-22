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

            echo $this->Form->control('equipamento_id', array('type' => 'select', 'default'=>'13', 'onChange'=>'pegarValores()', 'label' => 'Selecione o Equipamento', 'options' => $equipamentos ));

            echo $this->Form->control('atendente_id', array('type' => 'hidden', 'value'=> $idLogado));
      
            echo $this->Form->control('situacao', array('type' => 'hidden', 'value' => 'Pendente'));

            date_default_timezone_set('America/Sao_Paulo');
            $dataRetirada = date('Y-m-d H:i');
            echo $this->Form->control('dataRetirada', array('type' => 'hidden', 'value'=> $dataRetirada));

            ?>
            
        <fieldset>
        <legend><?= __('Selecione os acessórios') ?></legend>
        <div class="selectAcess">      
        </div>

        <?php
             echo $this->Form->input('acessorios._ids', array('label' => false, 'div' => false,'type' => 'select','multiple'=>'checkbox','legend' => 'false'));
        ?>
    </fieldset>

    <?php

    //echo $this->Form->control('periodoEmail', array('label' => 'Período ao enviar Emails', 'placeholder' => 'Informe o período em dias'));

    echo $this->Form->input('emailFlag', array('label' => 'Enviar Email ao Solicitante', 'type' => 'checkbox', 'checked'));     

    echo $this->Form->control('mensagemEmail', array('type' => 'textarea', 'label' => 'Incluir Mensagem no Email (Opcional)'));
    ?>
        
    <?= $this->Form->button(__('Emprestar')) ?>
    <?= $this->Form->end() ?>

</div>



