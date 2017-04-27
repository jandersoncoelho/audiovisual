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

        $nomes;
       $i = 0;
        foreach ($usuarios as $usuario):
            $nomes[$i] = strval($usuario);
        echo strval($nomes[$i]);
        $i++;
        
        endforeach; 
        //echo strval($usuarios);

        //$user = $usuarios->nome;
        //echo $usuarios->nome;
            echo $this->Form->control('numeroPatrimonio', array('label' => 'Número Patrimônio'));
            echo $this->form->input('nomeSolicitante', array('type'=>'select', 'options'=> $nomes, 'label'=>'Selecione o Solicitante'));
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
