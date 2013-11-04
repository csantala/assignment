<?php // date_default_timezone_set($timezone); ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Assignment: <?php echo $objective;?></title>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <!-- Excel-like css -->
    <link href="/css/excel-2007.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap -->
    <link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="/common/bootstrap/css/responsive.css" rel="stylesheet" />

  	<!-- Bootstrap Extended -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-wysihtml5.css"></link>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"></link>
	<script src="js/wysihtml5-0.3.0_rc2.js"></script>
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-wysihtml5.js"></script>

    <!-- Glyphicons Font Icons -->
    <link href="/common/theme/css/glyphicons.css" rel="stylesheet" />

    <!-- Uniform Pretty Checkboxes -->
    <link href="/common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="/common/theme/css/style-light.css?1369753444" rel="stylesheet" />

    <!-- Excel-like css -->
    <link href="/css/excel-2007.css" rel="stylesheet" type="text/css" />

    <!-- General css -->
    <link href="/css/style.css" rel="stylesheet" type="text/css" />

    <!-- LESS.js Library -->
    <script src="/common/theme/scripts/plugins/system/less.min.js"></script>
</head>
<body class="" style="padding:100px">
     <!-- Content -->
    <div id="contentx">
        <div class="innerLR innerT">
        	<form action="/assignment/begin" method="post">
        		<p>
        			<div style="text-align: right;">
        			<label for="notes"><h5>Student Name</h5></label>
        			<input name="student_name" class="span4" type="text"  /></div>
        		</p>

				<label for="objective"><h5>Objective</h5></label>
				<input class="span9" type="text" name="objective" style="color:#000" value="<?php echo $objective;?>" readonly>
				<br /><br />
				<label for="notes"><h5>Steps</h5></label>
				<textarea rows="5" id="steps" name="steps"  style="color:#000"  class="span9" readonly><?php echo $steps;?></textarea>
				<br /><br />
				<input type="hidden" value="<?php echo $synopsis_url?>" name="synopsis_url">
				<input type="hidden" value="<?php echo $synopsis_id;?>" name="synopsis_id">
				<input type="hidden" value="<?php echo $assignment_id;?>" name="assignment_id">
				<p><input type="submit" value="     Begin     " class="btn btn-icon btn-primary glyphicons lightbulb" type="submit" value="Assign"><i></i></p>
			</form>
        </div>
	</div>
<div id="getlost">
	<?php //$this->load->view('/components/footer') ?>
</div>
    <?php $this->load->view('/components/themer') ?>
    <?php $this->load->view('/components/js_includes') ?>
</body>
</html>