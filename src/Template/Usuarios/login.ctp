
<div class="titulo">Controle Audiovisual
</div>

<div class="img">
</div>
<div class="form">
  <div class="forceColor"></div>
  <div class="topbar">

    
    <?= $this->Form->create() ?>

    <?= $this->Form->input('email', array('class' => 'input', 'placeholder' => 'E-mail', 'label' => '')) ?>

    <?= $this->Form->input('password', array('class' => 'input', 'placeholder' => 'Senha', 'type' => 'password', 'label' => '')) ?>
  
  <?= $this->Form->button('Login', array('class' => 'submit')) ?>
        <?= $this->Form->end() ?>
         </div>
</div>

</div>
</body>
</html>
