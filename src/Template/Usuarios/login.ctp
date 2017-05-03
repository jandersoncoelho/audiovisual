
  <div class="menu">
  <ul class="mainmenu clearfix">
    <li class="menuitem">Well</li>
    <li class="menuitem">how</li>
    <li class="menuitem">about</li>
    <li class="menuitem">that?</li>
  </ul>
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
