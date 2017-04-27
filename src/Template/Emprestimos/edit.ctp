<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="emprestimos form large-9 medium-8 columns content">
    <?= $this->Form->create($emprestimo) ?>
    <fieldset>
        <legend><?= __('Editar Empréstimo') ?></legend>
        <?php
            echo $this->Form->control('nomeAtendente', array('label' => 'Nome do Atendente' ));
            echo $this->Form->control('nomeSolicitante', array('label' => 'Nome do Solicitante' );
            echo $this->Form->control('numeroPatrimonio', array('label' => 'Número Patrimônio' );

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
