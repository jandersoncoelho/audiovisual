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

    echo '<script>var acessorios = "'. $acessorios .'";</script>';

    $teste = json_encode($acessorios);
            echo "<script>var teste = ". $teste . ";\n</script>";

//       $i = 0;
//     $nomeAcessorios;
// foreach ($acessorios as $ac){
//   //echo $ac;
//   $nomeAcessorios[$i] = $ac;
//   echo $nomeAcessorios[$i];
//   $i++;
// }
// $string_array = implode("|", $nomeAcessorios);


//echo '<script>var nomeAcessorios = "'. $string_array .'";</script>';


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


<!-- Trigger the modal with a button -->

 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Mais Acessórios</button> 

<!-- Modal -->
 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Acessórios Adicionais</h4>
      </div>
      <div class="modal-body">

        <?php

            echo $this->Form->input('acessorios._ids', array('label' => false, 'div' => false,'type' => 'select','multiple'=>'checkbox','legend' => 'false'));
        ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Concluir</button>
      </div>
    </div>

  </div>
</div>


        
    <?= $this->Form->button(__('Emprestar')) ?>
    <?= $this->Form->end() ?>

</div>

<script type="text/javascript">

     function pegarValores(){
        var valor = $('#equipamento-id').val();  
        var ValorA = document.getElementById("equipamento-id").value;    
        alert(ValorA);

         var data = $('#data_json').val();

        var var2= "<?phpecho"+"$this->Form->input('acessorios._ids', array('label' => false, 'div' => false,'type' => 'select','multiple'=>'checkbox','legend' => 'false'))"+";?>";

        

        var var3 = "<input type='checkbox' name='vehicle' value="+valor+">"+ teste +" ";

        var var4 = valor;

        $('.selectAcess').empty();
        $('.selectAcess').prepend(valor);
 }
 </script>
