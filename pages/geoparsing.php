<?php include '../header.php'; ?> 
<section id="portfolio-elem">
	<div class="graficos">
		<p><img title="Sentisis" src="/img/geoparsing/azul.jpg" alt="" height="409"></p>
		<p><img title="CLAVIN" src="/img/geoparsing/clavin.jpg" alt="" height="340"></p>
		<p><img title="OpenStreetMap" src="/img/geoparsing/openstreetmap.jpg" alt="" height="373"></p>
	</div>
	<div class="resumen">
		<header>
			<h1>Geoparsing</h1>
			<p>Desarrollo Java</p>
		</header>
		<section id="portfolio-descr">
			<p>
				Software realizado para la plataforma de análisis de redes sociales de Sentisis Analitics. El cliente tenía el requerimiento de geolocalizar usuarios y mensajes de países de habla hispana con tal de poder sesgar geográficamente sus estudios.
			</p>
			<p>
				La solución ofrecida integra el motor CLAVIN (Cartographic Location And Vicinity INdexer), un software Open Source, junto a la cartografía, también libre, de OpenStreetMap. El software puede interpretar localizaciones mal escritas (p.ej. Madriz, Barcenola) y abreviaciones (BCN), así como posibles alias (p.ej. MDQ para Mar de Plata), además de filtrar.
			</p>
			<p>
				El producto final se integra en el stack server de Sentisis, y es capaz tanto de procesar millones entradas en "batch" para crear, por ejemplo, mapas de popularidad, como de procesar entradas una a una instantáneamente para asociar un signal o usuario social a una localización.
			</p>
			<p>Enlaces:
			<ul>
				<li><a href="http://www.sentisis.com/">Sentisis</a></li>
				<li><a href="http://clavin.bericotechnologies.com/">CLAVIN</a></li>
				<li><a href="http://www.openstreetmap.org/">OpenStreetMap</a></li>
			</ul>
			<a class="portfolio-url" href="https://github.com/OscarDoc/Java-GeoParser" target="blank">GitHub</a>
			</p>
		</section>
	</div>		
</section>
<?php include '../footer.php'; ?>