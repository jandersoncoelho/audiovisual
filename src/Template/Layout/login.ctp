    <!DOCTYPE html>
    <html >
    <head>
      
      <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>

           
          <?= $this->Html->css('style.css') ?>
          <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('base.css') ?>
    

        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <?= $this->fetch('meta') ?>

    </head>
    <body class="body">

         <?= $this->Flash->render() ?>
        <div class="container clearfix">
            <?= $this->fetch('content') ?>
        </div>

    </body>
    </html>