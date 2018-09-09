<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Save Energy consumption management</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url();?>vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url();?>vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url();?>vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url();?>vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<link href="<?php echo base_url();?>vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>build/css/custom.min.css" rel="stylesheet">
	<!-- jQuery -->
    <script src="<?php echo base_url();?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	
    
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url();?>vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url();?>vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url();?>vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url();?>vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url();?>vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url();?>vendors/select2/dist/js/select2.full.min.js"></script>
	<script src="<?php echo base_url();?>vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Parsley -->

    <!-- Autosize -->
    <script src="<?php echo base_url();?>vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url();?>vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <link href="<?php echo base_url();?>vendors/morris.js/morris.css" rel="stylesheet">
    <script src="<?php echo base_url();?>vendors/starrr/dist/starrr.js"></script>
    <script src="<?php echo base_url();?>vendors/Chart.js/dist/Chart.js"></script>
    <script src="<?php echo base_url();?>vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>vendors/morris.js/morris.min.js"></script>
    <!-- Custom Theme Scripts -->

	<style>
		.condiv{
			background:#F7F7F7;
			min-height:600px !important;
		}
		footer{
			margin-left:0px !important;
			background:#EDEDED;
			border:1px solid #D9DEE4;
		}
		.nav_menu{
			margin-bottom:0px !important;
		}
		.logreg{
			padding:10px 0 0 10px;
		}
        .mypara {
            text-align: justify;
            font-size:16px;
        }

	</style>
  </head>

  <body class="nav-md">
  
    <div class="container body">
		<!-- top navigation -->
		<div class="row">
			<div class="top_nav col-md-12">
			  <div class="nav_menu">
				<nav>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?php echo  base_url();?>" >
								Usage Prediction
							</a>
						</li>
						<li>
							<a href="<?php echo  base_url();?>welcome/monitor" >
								Monitor Realtime  Usage
							</a>
						</li>
					</ul>
				</nav>
			  </div>
			</div>
		</div>
		<!-- /top navigation -->
		
		<div class="row">
		<!-- page content --> 