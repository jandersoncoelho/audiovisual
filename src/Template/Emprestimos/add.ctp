<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="emprestimos form large-9 medium-8 columns content">
    <?= $this->Form->create($emprestimo) ?>
    <fieldset>
        <legend><?= __('Novo Empréstimo') ?></legend>

        <label>Selecione o Solicitante</label>
        <select name="nomeSolicitante">
        <?php
    foreach ($solicitantes as $solicitante) 
    { ?>
        <option value='<?php echo $solicitante; ?>'><?php echo $solicitante; ?></option> 
    <?php } ?>
    </select>
    <?php

            echo $this->Form->control('numeroPatrimonio', array('label' => 'Número Patrimônio'));
            //echo $this->form->input('nomeSolicitante', array('type'=>'select', 'options' => $usuarios->nome, 'label'=>'Selecione o Solicitante'));
            echo $this->Form->control('nomeAtendente', array('type' => 'hidden', 'value'=> $usuarioLogado));
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
