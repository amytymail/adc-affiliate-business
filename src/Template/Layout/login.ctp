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

$cakeDescription = 'Add Chakra';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    <?= $this->Html->charset() ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="webroot/img/logo-fav.png">
    <title>
        <?= $cakeDescription. ':' . $this->fetch('title'); ?>
    </title>
	<?= $this->Html->css([
		'../lib/perfect-scrollbar/css/perfect-scrollbar.min.css', 
		'../lib/material-design-icons/css/material-design-iconic-font.min.css'
	]); ?>
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?= $this->Html->css('style.css'); ?>
</head>
<body class="be-splash-screen">
	<?= $this->Flash->render('authError'); ?>
	<?= $this->fetch('content') ?>
	<?= $this->Html->script([
		'../lib/jquery/jquery.min.js',
		'../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js',
		'main.js',
		'../lib/bootstrap/dist/js/bootstrap.min.js',
	]); ?>
	
    <script type="text/javascript">
		$(document).ready(function(){
			//initialize the javascript
			App.init();
		});
    </script>
</body>
</html>