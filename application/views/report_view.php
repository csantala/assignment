<?php
	date_default_timezone_set($timezone);
	$et_tip = "The this the student's synopsis with elapsed time from initiation to completion.";
?>
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
    <meta http-equiv="refresh" content="120">
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
	   	<h3 id="assignment_header">Synopsis Report</h3><br>
        	<form id="begin" action="/create/begin" method="post">

        		<p>
        			STUDENT: <input id="student_name" value="<?php echo $student_name; ?>" name="student_name" class="span3" type="text" readonly style="color:#000000" />
        		</p>
<p>
				<label><h5>OBJECTIVE</h5></label>
				<input id="objective" type="text" readonly value="<?php echo $objective;?>" />
</p>
<p>
				<label><h5>NOTES</h5></label>
				<textarea id="steps" readonly><?php echo $steps;?></textarea>
</p>
				</form>
				<?php echo $date?>&nbsp;&bull;&nbsp;Elapsed time: <?php echo $elapsed_time;?></span>&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="<?php echo $et_tip;?>">?</a></br>

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
	                    </tr>
	                <?php } ?>
	                </tbody>
	           </table>
	        </div>
	        <?php $this->load->view('/components/comments', array('comments_container_id' => $hash)); ?>
	        <?php $this->load->view('/components/comment_form', array('comments_container_id' => $hash)); ?>
	         <span class="comment"><span>

<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->
<br />
<?php //$this->load->view('/components/footer') ?>
</div>

<script src="/common/bootstrap/js/bootstrap.min.js"></script>
<script src="/common/theme/scripts/demo/common.js?1384198042"></script>

</body>
</html>