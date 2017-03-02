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
            <?= $cakeDescription . ':' . $this->fetch('title'); ?>
        </title>
        <?=
        $this->Html->css([
            '../lib/perfect-scrollbar/css/perfect-scrollbar.min.css',
            '../lib/material-design-icons/css/material-design-iconic-font.min.css'
        ]);
        ?>
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <?=
        $this->Html->css([
            '../lib/perfect-scrollbar/css/perfect-scrollbar.min.css',
            '../lib/jquery.vectormap/jquery-jvectormap-1.2.2.css',
            '../lib/jqvmap/jqvmap.min.css',
            '../lib/datetimepicker/css/bootstrap-datetimepicker.min.css',
            '../lib/material-design-icons/css/material-design-iconic-font.min.css',
            '../lib/datatables/css/dataTables.bootstrap.min.css',
            '../lib/datetimepicker/css/bootstrap-datetimepicker.min.css',
            '../lib/select2/css/select2.min.css',
            '../lib/bootstrap-slider/css/bootstrap-slider.css',
            'style.css'
        ])
        ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
            <?= $this->fetch('script') ?>
    </head>
    <body>
        <div class="be-wrapper be-fixed-sidebar">
            <?= $this->element('navbar'); ?>
            <?= $this->fetch('content') ?>
            <?= $this->element('right-sidebar'); ?>
        </div>
        <?=
        $this->Html->script([
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
            '../lib/datatables/js/jquery.dataTables.min.js',
            '../lib/datatables/js/dataTables.bootstrap.min.js',
            '../lib/datatables/plugins/buttons/js/dataTables.buttons.js',
            '../lib/datatables/plugins/buttons/js/buttons.html5.js',
            '../lib/datatables/plugins/buttons/js/buttons.flash.js',
            '../lib/datatables/plugins/buttons/js/buttons.print.js',
            '../lib/datatables/plugins/buttons/js/buttons.colVis.js',
            '../lib/datatables/plugins/buttons/js/buttons.bootstrap.js',
            '../lib/moment.js/min/moment.min.js',
            '../lib/datetimepicker/js/bootstrap-datetimepicker.min.js',
            '../lib/select2/js/select2.min.js',
            '../lib/bootstrap-slider/js/bootstrap-slider.js',
            '../lib/chartjs/Chart.min.js',
            'app-tables-datatables.js',
            'app-form-elements.js',
            'app-charts-chartjs.js',
			'app-dashboard.js',
        ]);
        ?>
       <script type="text/javascript">
            $(document).ready(function () {
                //initialize the javascript
                App.init();
				App.dataTables();
				App.formElements();
				App.ChartJs();
				App.dashboard();
            });
        </script>
		
    </body>
</html>