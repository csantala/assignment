<?php  date_default_timezone_set('America/Vancouver'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
    <title>Synopsis Report</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
	<meta name="COPYRIGHT" CONTENT="&copy; 2013 Ablitica Corp.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <!-- Bootstrap -->
    <link href="../common/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="../common/bootstrap/css/responsive.css" rel="stylesheet" />

    <!-- Glyphicons Font Icons -->
    <link href="../common/theme/css/glyphicons.css" rel="stylesheet" />

    <!-- Uniform Pretty Checkboxes -->
    <link href="../common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="../common/theme/css/style-light.css?1378421746" rel="stylesheet" />

    <!--Custom Stylesheet :: CSS -->
    <link href="/css/style.css" rel="stylesheet" />

    <!-- LESS.js Library -->
    <script src="../common/theme/scripts/plugins/system/less.min.js"></script>

</head>
<body class="">

<!-- Wrapper -->
<div id="login">

    <div class="container">
    <!-- Box -->
	   <div class="innerLR innerT">
	   	<h4>Submitted by: <span style="color:#000"> <?php echo $student_name?></span></h4><br>
	   	<form>
	       <label for="objective"><h5>Objective</h5></label>
			<input class="span8" style="color:#000" type="text" name="objective" value="<?php echo $objective;?>" readonly>
			<p> <label for="steps"><h5>Steps</h5></label>
			    <textarea rows="5"  style="color:#000" id="steps" readonly name="steps" class="span8"><?php echo strip_tags(nl2br($steps)); ?></textarea></p>
			</form>
	        <h6><?php echo $date?>&nbsp;&bull;&nbsp;Elapsed time: <?php echo $elapsed_time;?></span></h6>

	        <!-- Row -->
	        <div class="row-fluid row-merge widget">

	            <table class="dynamicTable table table-striped table-bordered table-condensed dataTable span12">
	                <thead>
	                    <th class="report_clock">clock</th>
	                    <th class="report_task">task</th>
	                </thead>
	                <tbody>
	                    <?php
	                        foreach ($synopsis as $task) {
	                    ?>
	                    <tr>
	                        <td><?php echo date("g:i:a", $task->time);?></td>
	                        <td class="comment" style="color:#111"><?php echo $task->task?></td>
	                    </tr>
	                <?php } ?>
	                </tbody>
	           </table>
	        </div>
	        <!-- // Row END -->
	    </div>
	    <button class="btn">Return To Student</button>
    <!-- // Box END -->
    </div>
</div>

<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->
<br />
<?php //$this->load->view('/components/footer') ?>
</div>


	<?php $this->load->view('/components/js_includes') ?>

</body>
</html>