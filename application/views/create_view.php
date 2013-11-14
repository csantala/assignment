<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Create Assignment</title>
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
	<script src="/js/wysihtml5-0.3.0_rc2.js"></script>
	<script src="/js/jquery-1.7.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/bootstrap-wysihtml5.js"></script>

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
	<!-- Form validation -->
	<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.js"></script>
	<script type="text/javascript" src="/js/jquery.form.min.js"></script>
	<script type="text/javascript" src="/js/jquery-validate.js"></script>
	<script type="text/javascript">
$(document).ready(function () {
	$('#objective').focus();
	$('#submit').click(function() {
 		$('#assignment_form').submit();
	});
	$('#assignment_form').validate({
	    rules: {
	    	 objective: {
	            required: true
	     	},
	        teacher_email: {
	 //           required: true,
	            email: true
	        },
	    },
	    submitHandler: function (form) {
			  form.submit()
	    }
	});
});
	</script>
</head>
<body class="" style="padding:100px">
	<h3 id="assignment_header">Create An Assignment</h3>

     <!-- Content -->
    <div id="contentx">
        <div class="innerLR innerT">
<br>
        	<form id="assignment_form" action="/create" method="post">
				<label for="objective"><h5>Objective&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="Specify the objective of the assignment here.">?</a></h5></label>
				<input tabindex="1" class="span9" type="text" name="objective" id="objective" style="color:#000" >
				<br /><br />
				<label for="steps"><h5>Notes&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="Explanation of the Objective.">?</a></h5></label>
				<textarea tabindex="2" rows="5" id="steps" name="steps" style="color:#000" class="span9"></textarea>
				<label for="teacher_email"><h5>Email&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="Receive notifications from the dashboard when a student has submitted a report. Email address is not required.">?</a></h5></label>
				<input tabindex="3" type="text" name="teacher_email" id="teacher_email" style="color:#000">
				<br /><br /><br>
				<p><a tabindex="4" type="submit" id="submit" class="btn btn-icon btn-primary glyphicons parents"><i></i>Create Assignment</a></p>
			</form>
        </div>
	</div>
		<br>
	<hr>
<div id="getlost">
	<?php $this->load->view('/components/footer') ?>
</div>

<!-- Bootstrap -->
<script src="/common/bootstrap/js/bootstrap.min.js"></script>

<!-- Common Demo Script -->
<script src="/common/theme/scripts/demo/common.js?1384198042"></script>

</body>
</html>