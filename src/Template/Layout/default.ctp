<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Harjoitustehtävä: Verkkokauppa';
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

    <?= $this->Html->script('//code.jquery.com/jquery-3.4.1.min.js', array('inline' => false)); ?>
    <?= $this->Html->script('//kit.fontawesome.com/710a726212.js', array('inline' => false)); ?>
    <?= $this->Html->script('search.js'); ?>
    <?= $this->Html->script('hide.js'); ?>
    <?= $this->Html->script('sort.js'); ?>
    <?= $this->Html->script('cart.js'); ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('own_styles.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="large-1 columns">
            <li class="name">
                <h1>
                    <?= $this->Html->link(
                        '<span class="fa fa-home fa-fw"></span>&nbsp;Etusivu</span>',
                        ['controller' => 'Products', 'action' => 'index'],
                        ['escape' => false]
                    ) ?>
                </h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li class="has-form">
                    <div class="row collapse">
                        <div class="large-10 small-9 columns">
                        <input type="text" id="searchfield" class="searchfield" placeholder="Hae tuotteita...">
                        </div>
                    </div>
                </li>
                <li>
                    <?= $this->Html->link(
                        '<span class="fas fa-shopping-basket">&nbsp;</span><span class="count"></span>',
                        ['controller' => 'Products', 'action' => 'index'],
                        ['escape' => false]
                    ) ?>
                </li>
                <li>
                    <a id="delete" href="#"><i class="fas fa-trash"></i></a>
                </li>
                <li>
                    <?= $this->Html->link(
                        '<span class="fas fa-user-cog"></span></span>',
                        ['controller' => 'Products', 'action' => 'add'],
                        ['escape' => false]
                    ) ?>
                </li>
            </ul>
        </div>
    </nav>

    <div class="shopname">
        <h1>Kakkutaiturit - tervetuloa verkkokauppaamme!</h1>
    </div>
    <div class="note">
        <?= $this->Flash->render() ?>
    </div>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
