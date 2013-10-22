<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
    <title>Snopzmini: Instant Synopses Generator</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="description" content="Instant synopses generator tool for your objective. Anonymous and private.">
	<meta name="keywords" content="synopses generator, development, productivity, achievement, objectives, awesome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <!-- Excel-like css -->
    <link href="/css/excel-2007.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap -->
    <link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="/common/bootstrap/css/responsive.css" rel="stylesheet" />

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
<body class="">

     <!-- Content -->
    <div id="contentx">
        <div class="innerLR innerT">
            <div class="widget">
                <div class="widget-head">
                    <h4 class="heading edit_objective">Synopsis: Anonymous Synopsis Logger and Reporter at an Instant</h4>
                    <span class="details pull-right">
                    	<a href="<?php echo site_url();?>"><?php echo site_link(base_url());?></a>
                    </span>
                </div>
                <div class="widget-body">
                    <div class="row-fluid">
                    	<h5>What is this thing?</h5>
                    	<p>A tool which logs the steps you take to complete an objective. A synopsis logger.</p>
                    	<h5>Why would I want to use this?</h5>
                    	<p>In today's multitasking world, we often lose focus on our current objective. When building a synopsis with this tool, you efficiently complete your objective in peace while always in focus. Synopsis provides you with reference, statistics, and reporting components.</p>
                    	<h5>How do I use this?</h5>
                    	<p>It's simple. Navigate to synopsis.ablitica.com where it will instantly set up a unique hashed url view of the synopsis logger. State your objective. Begin work and log each step you take with a newline in the editor.</p>
<p> Report your synopses, if you want, atvany time. Return to this hashed url view to continue your synopses later.  Note that the timer is always running so it's best to accomplish your objective in one sitting!</p>
                    	<h5>Is this secure?</h5>
                    	<p>Nothing is secure but the creator/owner of this site is not evil (yet): none of your personal information is collected here, so nobody knows who generated what. Further, Ablitica, the creator of this site, does not share any information logged at this site with anyone. Read our [privacy policy] for further information.</p>
                    	<h5>Who made this</h5>
                    	<p>Chris Santala, the founder of Ablitica, created this in 2013 in CodeIgniter & jQuery in Aptana with some Excel CSS wtitten by Vademire Politov.</p>
						<h5>What is <a href="http://synopses.ablitica.com" target="_blank">synopses.ablitia.com</a></h5>
						<p>The full version of the synopsis logger, featuring multiple synopsis creation, user accounts, projects, and the complete means to augment your productivity through the roof.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Content END -->
        </div>

        <?php $this->load->view('/components/footer') ?>


    <?php $this->load->view('/components/themer') ?>
    <?php $this->load->view('/components/js_includes') ?>

</body>
</html>