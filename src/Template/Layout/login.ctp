    <!DOCTYPE html>
    <html >
    <head>
      
      <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>

    <link href='http://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

           <?= $this->Html->css('style.css') ?>
          <?= $this->Html->script('modernizr-custom.js') ?>
          <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('cake.css') ?>

        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <?= $this->fetch('meta') ?>

    </head>

    <body>

         <?= $this->Flash->render() ?>
        <div class="container clearfix">
            <?= $this->fetch('content') ?>
        </div>

    </body>
    </html>