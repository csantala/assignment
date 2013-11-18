<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Dashboard</title>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="refresh" content="30">
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

	<script type="application/javascript" src="/js/wysihtml5-0.3.0_rc2.js" ></script>
	<script type="application/javascript" src="/js/jquery-1.7.1.min.js"></script>
	<script type="application/javascript" src="/js/bootstrap.min.js"></script>
	<script type="application/javascript" src="/js/bootstrap-wysihtml5.js"></script>

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

    <script src="/js/bookmark.js"></script>

</head>
<body class="" style="padding:100px">
	<h3 id="assignment_header">Assignment Dashboard&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="Bookmark this page and monitor it over time - the page will update with student's progress while they complete the assignment.">?</a>&nbsp;&bull;&nbsp;<a style="line-height: 12px;font-size: 12px" id="bookmarkme" href="#" rel="sidebar" title="bookmark this page">bookmark this page</a></h3>
<br>
        	<label><h5>ASSIGNMENT URL&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="Email or Text this URL to your students.">?</a></h5></label>
			<p><input onclick="select()" class="span5"  style="color:#008000" type="text" value="<?php echo $assignment_url;?>"></p>
			<p>
			<label><h5>OBJECTIVE</h5></label>
			<input id="objective" class="span9" type="text" name="objective" value="<?php echo $objective;?>" readonly>
		</p><p>
			<label><h5>NOTES</h5></label>
			<textarea id="steps" rows="5" id="steps" name="steps" readonly><?php echo $steps;?></textarea>
		</p>
		<p>
			<h4 id="progress">Progress&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="As students work on and complete their assignment, their progress will appear in this space.">?</a></h4>

			  <table id="scanner_data">
				<th>Student</th>
				<th>Elapsed Time</th>
				<th>Synopses</th>
				<th>Status</th>
				<th>Report</th>
				<?php
					if (! empty($scanner_data)) {
						foreach($scanner_data as $data) { ?>
				<tr>
					<td><?php echo $data->student_name;?></td>
					<td><?php echo $data->elapsed_time;?></td>
					<td><?php echo 'synopses';?></td>
					<td><?php echo $data->status;?></td>
					<td><?php if (isset($data->report_url)) { ?><a href="<?php echo $data->report_url;?>">Report</a><?php } ?></td>
				</tr>
				<?php } ?>
			<?php } else { ?>
				<?php for ($i = 0; $i < 4; $i++) { ?>
				<tr>
					<td class="scanner_cell" colspan="5">&nbsp;</td>
				</tr>
					<?php } ?>
			<?php } ?>
			</table>
	</p>
	<hr>
<div id="getlost">
	<?php $this->load->view('/components/footer') ?>
</div>

<script src="/common/bootstrap/js/bootstrap.min.js"></script>
<script src="/common/theme/scripts/demo/common.js?1384198042"></script>

</body>
</html>