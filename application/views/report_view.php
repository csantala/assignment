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
    <link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="/common/bootstrap/css/responsive.css" rel="stylesheet" />

    <!-- Glyphicons Font Icons -->
    <link href="/common/theme/css/glyphicons.css" rel="stylesheet" />

    <!-- Uniform Pretty Checkboxes -->
    <link href="/common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="/common/theme/css/style-light.css?1378421746" rel="stylesheet" />

    <!--Custom Stylesheet :: CSS -->
    <link href="/css/style.css" rel="stylesheet" />

    <!-- LESS.js Library -->
    <script src="/common/theme/scripts/plugins/system/less.min.js"></script>

    <script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.js"></script>
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
	        <h6><?php echo $date?>&nbsp;&bull;&nbsp;Elapsed time: <?php echo $elapsed_time;?></span>Help &nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="click any row on the report below to add comments.">comment</a></h6>

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
	                        <td class="task" data-task_id="<?php echo $task->id;?>" style="color:#111"><?php echo $task->task?>
	                        <?php if (isset($task->comment)) { echo "<br>&nbsp;" . $task->comment; } ?>
	                        <span class="comment<?php echo $task->id;?>"><span></td>
	                    </tr>
	                <?php } ?>
	                </tbody>
	           </table>
	        </div>
	        <!-- // Row END -->
	    </div>
    <!-- // Box END -->
    </div>
</div>

<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->
<br />
<?php //$this->load->view('/components/footer') ?>
</div>
<!-- Bootstrap -->
<script src="/common/bootstrap/js/bootstrap.min.js"></script>

<!-- Common Demo Script -->
<script src="/common/theme/scripts/demo/common.js?1384198042"></script>
	<!-- JQuery -->
	<script src="/common/theme/scripts/plugins/system/jquery.min.js"></script>

	<!-- Modernizr -->
	<script src="/common/theme/scripts/plugins/system/modernizr.js"></script>

	<!-- Bootstrap -->
	<script src="/common/bootstrap/js/bootstrap.min.js"></script>

	<!-- SlimScroll Plugin -->
	<script src="/common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js"></script>

	<!-- Common Demo Script -->
	<script src="/common/theme/scripts/demo/common.js?1369753444"></script>

	<!-- Holder Plugin -->
	<script src="/common/theme/scripts/plugins/other/holder/holder.js"></script>

	<!-- Uniform Forms Plugin -->
	<script src="/common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>

	<script type="text/javascript" src="/js/jquery.hotkeys.js"></script>
	<script type="text/javascript" src="/js/moment.min.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>

</body>
</html>