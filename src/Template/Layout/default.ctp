<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Audiovisual';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>



    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><?= $this->Html->link(__($usuarioLogado), ['controller' => 'Usuarios', 'action' => 'view', $idLogado]) ?></li>
                <li><?= $this->Html->link(__('Sair'), ['controller' => 'Usuarios', 'action' => 'logout']) ?></li>
            </ul>
        </div>
    </nav>

    <div class="tamNav">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Emprestar'), ['controller' => 'Emprestimos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Empréstimos Pendentes'), ['controller' => 'Emprestimos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Empréstimos Finalizados'), ['controller' => 'Emprestimos', 'action' => 'finalizados']) ?></li>
        <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Solicitantes'), ['controller' => 'Solicitantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Equipamentos'), ['controller' => 'Equipamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Acessórios'), ['controller' => 'Acessorios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Ocorrências'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?></li>
    </ul>
    </nav>
</div>

    <?= $this->Flash->render() ?>

    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
