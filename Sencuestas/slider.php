<div class="container">
	<div id="da-slider" class="da-slider">
		<div class="da-slide">
			<h2>Java</h2>
			<p>Videotutoriales de programación en Java</p>
			<div class="da-img">
				<img src="images/2.png" alt="Imagen1">
			</div>
		</div>

		<div class="da-slide">
			<h2>CSS</h2>
			<p>Videotutoriales de programación en Css</p>
			<div class="da-img">
				<img src="images/3.png" alt="Imagen2">
			</div>
		</div>

		<div class="da-slide">
			<h2>HTML5</h2>
			<p>Videotutoriales de programación en HTML5</p>
			<div class="da-img">
				<img src="images/1.png" alt="Imagen3">
			</div>
		</div>

		<div class="da-slide">
			<h2>Mysql</h2>
			<p>Videotutoriales de programación en Mysql</p>
			<div class="da-img">
				<img src="images/4.png" alt="Imagen4">
			</div>
		</div>
		<nav class="da-arrows">
			<span class="da-arrows-prev"></span>
			<span class="da-arrows-next"></span>
		</nav>
	</div>
</div>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
<script>
	$(function(){
		$('#da-slider').cslider({
			autoplay: true,
			bgincrement: 450
		});
	});
</script>