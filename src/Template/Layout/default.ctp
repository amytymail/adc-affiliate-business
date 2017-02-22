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
    
    <!--link rel="shortcut icon" href="webroot/img/logo-fav.png">
    <title>Beagle</title-->
    
    
    <?= $this->Html->charset() ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
	<?= $this->Html->css([
		'../lib/perfect-scrollbar/css/perfect-scrollbar.min.css', 
		'../lib/material-design-icons/css/material-design-iconic-font.min.css'
	]); ?>
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?= $this->Html->css([
		'../lib/jquery.vectormap/jquery-jvectormap-1.2.2.css',
		'../lib/jqvmap/jqvmap.min.css',
		'../lib/datetimepicker/css/bootstrap-datetimepicker.min.css',
		'style.css'
	]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
	<?= $this->fetch('content') ?>
    <?= $this->Flash->render() ?>
	<?= $this->Html->script([
		'../lib/jquery/jquery.min.js',
		'../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js',
		'main.js',
		'../lib/bootstrap/dist/js/bootstrap.min.js',
		'../lib/jquery-flot/jquery.flot.js',
		'../lib/jquery-flot/jquery.flot.pie.js',
		'../lib/jquery-flot/jquery.flot.resize.js',
		'../lib/jquery-flot/plugins/jquery.flot.orderBars.js',
		'../lib/jquery-flot/plugins/curvedLines.js',
		'../lib/jquery.sparkline/jquery.sparkline.min.js',
		'../lib/countup/countUp.min.js',
		'../lib/jquery-ui/jquery-ui.min.js',
		'../lib/jqvmap/jquery.vmap.min.js',
		'../lib/jqvmap/maps/jquery.vmap.world.js',
		'app-dashboard.js'
	]); ?>
	
    <script type="text/javascript">
		$(document).ready(function(){
			//initialize the javascript
			App.init();
			App.dashboard();
		});
    </script>
</body>
</html>