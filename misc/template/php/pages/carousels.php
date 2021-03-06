<h3>Carousels <span>Component for cycling through elements</span></h3>
<div class="innerLR">

		
	<!-- Carousel -->
	<div id="carousel-1" class="carousel slide">
	
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-1" data-slide-to="1"></li>
			<li data-target="#carousel-1" data-slide-to="2"></li>
			<li data-target="#carousel-1" data-slide-to="3"></li>
			<li data-target="#carousel-1" data-slide-to="4"></li>
			<li data-target="#carousel-1" data-slide-to="5"></li>
		</ol>
		<!-- // Indicators END -->
		
		<!-- Items -->
		<div class="carousel-inner">
		
			<?php for ($i=1;$i<=5;$i++): ?>
			<!-- Item -->
			<div class="item<?php if ($i == 1): ?> active<?php endif; ?>">
				<img src="theme/images/gallery-2/<?php echo $i; ?>.jpg" alt="" />
				<div class="carousel-caption">
					<h4>Thumbnail heading</h4>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			</div>
			<!-- // Item END -->
			<?php endfor; ?>
			
		</div>
		<!-- // Items END -->
		
		<!-- Navigation -->
		<a class="left carousel-control" href="#carousel-1" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#carousel-1" data-slide="next">&rsaquo;</a>
		<!-- // Navigation END -->
		
	</div>
	<!-- // Carousel END -->
		

<!-- Code sample -->
<pre class="prettyprint margin-none">
&lt;div id="myCarousel" class="carousel slide"&gt;
  &lt;ol class="carousel-indicators"&gt;
    &lt;li data-target="#myCarousel" data-slide-to="0" class="active"&gt;&lt;/li&gt;
    &lt;li data-target="#myCarousel" data-slide-to="1"&gt;&lt;/li&gt;
    &lt;li data-target="#myCarousel" data-slide-to="2"&gt;&lt;/li&gt;
  &lt;/ol&gt;
  &lt;!-- Carousel items --&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="active item"&gt;...&lt;/div&gt;
    &lt;div class="item"&gt;...&lt;/div&gt;
    &lt;div class="item"&gt;...&lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- Carousel nav --&gt;
  &lt;a class="carousel-control left" href="#myCarousel" data-slide="prev"&gt;&lsaquo;&lt;/a&gt;
  &lt;a class="carousel-control right" href="#myCarousel" data-slide="next"&gt;&rsaquo;&lt;/a&gt;
&lt;/div&gt;
</pre>
<!-- // Code sample END -->

</div>