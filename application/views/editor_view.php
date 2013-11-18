<?php  date_default_timezone_set($timezone); ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Synopses Generator</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <!-- Excel-like css -->
    <link href="/css/excel-2013.css" rel="stylesheet" type="text/css" />
    <link href="/css/excel-2007.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap -->
    <link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="/common/bootstrap/css/responsive.css" rel="stylesheet" />
<!-- Bootstrap Extended -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-wysihtml5.css"></link>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"></link>
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
		<h3 id="assignment_header">Assignment Synopsis&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="Bookmark this page and monitor it over time - the page will update with student's progress while they complete the assignment.">?</a>&nbsp;&bull;&nbsp;<a style="line-height: 12px;font-size: 12px" id="bookmarkme" href="#" rel="sidebar" title="bookmark this page">bookmark this page</a></h3>
        <div class="innerLR innerT">
			<form id="begin" action="/create/begin" method="post">
        		<label><h5>Student Name</h5></label>
        		<input id="student_name" name="student_name" class="span3" type="text" style="color:#000000" readonly value="<?php echo $student_name; ?>">
        		<br><br>
				<label><h5>Objective</h5></label>
				<input class="objective" type="text" readonly value="<?php echo $objective;?>" />
				<br><br>
				<label><h5>notes</h5></label>
				<textarea class="steps" readonly><?php echo $steps;?></textarea>
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
		                                            <input class="task" type="text" data-i="<?php echo $row->position; ?>" <?php if ($row->task != '') { ?> value="<?php echo $row->task; ?>"<?php } ?>/>
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
        	<p>
        		<div id="done">
        			<a class="btn primary confirm" href="/generate/generate_report/<?php echo $project_id?>/<?php echo $assignment_hash?>">SUBMIT ASSIGNMENT</a>
        		</div>
        	</p>
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