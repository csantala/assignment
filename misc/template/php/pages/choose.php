<!-- Wrapper -->
<div id="choose-preview" class="<?php echo STYLE; ?>">

	<div class="container">

		<!-- Box -->
		<div class="heading-buttons">
			<h2><span class="text-primary">Ergo</span> Admin <span>Please choose an option ...</span></h2>
			<div class="buttons pull-right margin-none" style="padding: 15px 0 0;">
				<a target="_blank" href="<?php echo getURL(array('index')); ?>">Go Default</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- // Box END -->
		
		<!-- Box -->
		<div class="hero-unit well inverse white center">
		
			<div class="row-fluid">
				<div class="span6">
				
					<div class="box form-horizontal<?php if (STYLE == 'style-light'): ?> active<?php endif; ?>">
						<h3>Light</h3>
						<a href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('style' => 'style-light')))); ?>"><img src="<?php echo getURL(); ?>theme/images/demo/preview-light.jpg" alt="AdminKIT Preview Light" /></a>
						
						<div class="options">
							<hr class="separator" />
							<div class="control-group margin-none">
								<label class="control-label">Layout type</label>
								<div class="controls">
									<select class="span12" data-type="layout">
										<option value="light-fixed">Boxed</option>
										<option value="light-fluid">Fluid</option>
									</select>
								</div>
							</div>
							<div class="control-group margin-none">
								<label class="control-label">Menu position</label>
								<div class="controls">
									<select class="span12" data-type="menu">
										<option value="left">Left</option>
										<option value="right">Right</option>
									</select>
								</div>
							</div>
							<hr class="separator" />
							<div class="actions">
								<a id="light-fixed-left" target="_blank" href="<?php echo getURL(array('page' => 'index', 'layout_type' => 'fixed', 'menu_position' => 'menu-left', 'style' => 'style-light')); ?>" class="btn btn-primary btn-icon glyphicons right_arrow btn-active"><i></i> Live preview</a>
								<a id="light-fluid-left" target="_blank" href="<?php echo getURL(array('page' => 'index', 'layout_type' => 'fluid', 'menu_position' => 'menu-left', 'style' => 'style-light')); ?>" class="btn btn-primary btn-icon glyphicons right_arrow"><i></i> Live preview</a>
								<a id="light-fixed-right" target="_blank" href="<?php echo getURL(array('page' => 'index', 'layout_type' => 'fixed', 'menu_position' => 'menu-right', 'style' => 'style-light')); ?>" class="btn btn-primary btn-icon glyphicons right_arrow"><i></i> Live preview</a>
								<a id="light-fluid-right" target="_blank" href="<?php echo getURL(array('page' => 'index', 'layout_type' => 'fluid', 'menu_position' => 'menu-right', 'style' => 'style-light')); ?>" class="btn btn-primary btn-icon glyphicons right_arrow"><i></i> Live preview</a>
							</div>
						</div>
					</div>
					
				</div>
				<div class="span6">
					
					<div class="box form-horizontal<?php if (STYLE == 'style-dark'): ?> active<?php endif; ?>">
						<h3>Dark</h3>
						<a href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('style' => 'style-dark')))); ?>"><img src="<?php echo getURL(); ?>theme/images/demo/preview-dark.jpg" alt="AdminKIT Preview Light" /></a>
						
						<div class="options">
							<hr class="separator" />
							<div class="control-group margin-none">
								<label class="control-label">Layout type</label>
								<div class="controls">
									<select class="span12" data-type="layout">
										<option value="dark-fixed">Boxed</option>
										<option value="dark-fluid">Fluid</option>
									</select>
								</div>
							</div>
							<div class="control-group margin-none">
								<label class="control-label">Menu position</label>
								<div class="controls">
									<select class="span12" data-type="menu">
										<option value="left">Left</option>
										<option value="right">Right</option>
									</select>
								</div>
							</div>
							<hr class="separator" />
							<div class="actions">
								<a id="dark-fixed-left" target="_blank" href="<?php echo getURL(array('page' => 'index', 'layout_type' => 'fixed', 'menu_position' => 'menu-left', 'style' => 'style-dark')); ?>" class="btn btn-primary btn-icon glyphicons right_arrow btn-active"><i></i> Live preview</a>
								<a id="dark-fluid-left" target="_blank" href="<?php echo getURL(array('page' => 'index', 'layout_type' => 'fluid', 'menu_position' => 'menu-left', 'style' => 'style-dark')); ?>" class="btn btn-primary btn-icon glyphicons right_arrow"><i></i> Live preview</a>
								<a id="dark-fixed-right" target="_blank" href="<?php echo getURL(array('page' => 'index', 'layout_type' => 'fixed', 'menu_position' => 'menu-right', 'style' => 'style-dark')); ?>" class="btn btn-primary btn-icon glyphicons right_arrow"><i></i> Live preview</a>
								<a id="dark-fluid-right" target="_blank" href="<?php echo getURL(array('page' => 'index', 'layout_type' => 'fluid', 'menu_position' => 'menu-right', 'style' => 'style-dark')); ?>" class="btn btn-primary btn-icon glyphicons right_arrow"><i></i> Live preview</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		<!-- // Box END -->
	
	</div>
	
</div>
<!-- // Wrapper END -->