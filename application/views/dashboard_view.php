<?php
	$dashboard_tip = "Bookmark this page for future reference.";
	$assignment_tip = "Email or Text this URL to your students.";
	$progress_tip = "Student progress appears in this panel.  Click a Report link to view a report of the student's synopsis. Report links only appear when a student has submitted their completed work.";
?>

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
    <meta http-equiv="refresh" content="120">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
   	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Excel-like css -->
    <link href="/css/excel-2007.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap -->
    <link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="/common/bootstrap/css/responsive.css" rel="stylesheet" />

  	<!-- Bootstrap Extended -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-wysihtml5.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

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
<body>
	<h3 id="assignment_header">Assignment Dashboard</h3>
<br>
   <h5>ASSIGNMENT URL&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="<?php echo $assignment_tip;?>">?</a></h5>

   <p>
  	 <input onclick="select()" class="span5"  style="color:#008000" type="text" value="<?php echo $assignment_url;?>">
  	</p>

		<h5>OBJECTIVE</h5>
		<p><input id="objective" class="span9" type="text" name="objective" value="<?php echo $objective;?>" readonly></p>

		<h5>NOTES</h5>
		<p><textarea id="steps" rows="5" name="steps" readonly><?php echo $steps;?></textarea></p>

			<h4 id="progress">Progress&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="<?php echo $progress_tip;?>">?</a></h4>

			  <table id="scanner_data">
			  	<tr>
					<th>Student</th>
					<th>Elapsed Time</th>
					<th>Progress</th>
					<th>Status</th>
					<th>Report</th>
				</tr>
				<?php
					if (! empty($scanner_data)) {
						foreach($scanner_data as $data) { //ds($data,1);?>
				<tr>
					<td><?php echo $data->student_name;?></td>
					<td><?php echo $data->elapsed_time;?></td>
					<td><a href="/home/<?php echo $data->assignment_id;?>/<?php echo $data->synopsis_id;?>">synopsis</a></td>
					<td><?php echo $data->status;?></td>
					<td><?php if ($data->report_url != '') { ?><a href="<?php echo $data->report_url;?>">Report</a><?php } else { echo "-----"; }?></td>
				</tr>
				<?php } ?>
			<?php } else { ?>
				<?php for ($i = 0; $i < 4; $i++) { ?>
				<tr>
					<td class="scanner_cell" colspan="4">&nbsp;</td>
				</tr>
					<?php } ?>
			<?php } ?>
			</table>

	<hr>
<div id="getlost">
	<?php $this->load->view('/components/footer') ?>
</div>

<script src="/common/bootstrap/js/bootstrap.min.js"></script>
<script src="/common/theme/scripts/demo/common.js?1384198042"></script>

</body>
</html>