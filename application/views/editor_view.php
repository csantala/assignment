<?php
	date_default_timezone_set($timezone);
	$synopsis_tip = "Document each task you take to complete the assignment in the editor below.  Use a new line for each task, submit when complete. Bookmark this page to work on your synopsis in the future.";
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Synopsis</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
  	 <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Excel-like css -->
    <link href="/css/excel-2013.css" rel="stylesheet" type="text/css" />
    <link href="/css/excel-2007.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap -->
    <link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="/common/bootstrap/css/responsive.css" rel="stylesheet" />

	<!-- Bootstrap Extended -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-wysihtml5.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

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
<body>
		<h3 id="assignment_header">Synopsis&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="<?php echo $synopsis_tip?>">?</a></h3>
		<br>
        	<form id="begin" action="/create/begin" method="post">
        		<p>
        			STUDENT: <input id="student_name" value="<?php echo $student_name; ?>" name="student_name" class="span3" type="text" readonly style="color:#000000" />
        		</p>

					<h5>OBJECTIVE</h5>
				<p><input class="span9"  id="objective" type="text" readonly value="<?php echo $objective;?>" /></p>

					<h5>NOTES</h5>
				<p><textarea id="steps" readonly><?php echo $steps;?></textarea></p>
			</form>
		        <div class="row-fluid">
		            <form id="synopsis">
		                <div id="rows" data-assignment_id="<?php echo $assignment_hash?>"  data-project_id="<?php echo $project_id?>" data-session="<?php echo $session?>">
		                    <table class="ExcelTable2013">
		                        <tr style="color:#bbb">
		                            <th></th>
		                            <th>clock</th>
		                            <th>task 		        <span class="details pull-right">
		        	elapsed time: <span id="elapsed_time"></span>&nbsp;
		        </span></th>
		                        </tr>
		                            <?php
		                                $i = 1;
		                                foreach ($rows as $row) { ?>
		                                    <tr class="rowx">
		                                        <td class="heading"><?php echo $i; $i++; ?></td>
		                                        <td class="start">
		                                            <span data-time="<?php echo $row->time ?>"><?php echo date('g:i a', $row->time);?></span>
		                                        </td>
		                                        <td>
		                                            <input maxlength="300" class="task" type="text" data-i="<?php echo $row->position; ?>" <?php if ($row->task != '') { ?> value="<?php echo $row->task; ?>"<?php } ?>/>
		                                        </td>
		                                    </tr>
		                            <?php } ?>
		                            <?php
		                            //	if (count($rows) < 8) { ?>
		                        		<?php // for ($x = count($rows); $x<9; $x++) { ?>
		                            	     <!--tr class="rowx">
		                                        <td class="heading"><?php echo $i; $i++; ?></td>
		                                        <td class="start">
		                                            <span data-time="<?php echo $row->time ?>"></span>
		                                        </td>
		                                        <td>
		                                            <input class="task" type="text" data-i="<?php echo $row->position; ?>" <?php if ($row->task != '') { ?> value="<?php echo $row->task; ?>"<?php } ?>/>
		                                        </td>
		                                    </tr>

		                                    <?php //} ?>
		                            <?php //} ?> -->
		                    </table>
		                </div>
		            </form>

        		<div id="done">
        			<a class="btn primary confirm" href="/generate/generate_report/<?php echo $project_id?>/<?php echo $assignment_hash?>">SUBMIT SYNOPSIS</a>
        		</div>

		        </div>
<div id="getlost">
        <?php // $this->load->view('/components/footer') ?>
</div>

    <?php $this->load->view('/components/themer') ?>
    <?php $this->load->view('/components/js_includes') ?>
      <script src="/common/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/bookmark.js"></script>
    <script src="/common/theme/scripts/demo/common.js?1384198042"></script>

</body>
</html>