<?php
/* genera Html para cada article (foto y titulo de proyecto) */
function article($link, $title, $subt, $ext){
return <<<HTML
	<article>
	<a href="/pages/{$link}.php">
	<header>
	<div class="details">	
	<h1>{$title}</h1>
	<p>{$subt}</p>
	</div>
	</header>
	<span class="bw-wrap"><img src="img/{$link}/{$link}-bw.{$ext}" class="bw"></span>
	<span class="clr-wrap"><img src="img/{$link}/{$link}.{$ext}" class="clr"></span>
	</a>
	</article>
HTML;
}
include 'header.php';
?>
<section id="portfolio">
	<h2 id="portfolio-title">Proyectos</h2>
	<div>
		<?php
		echo (article('geoparsing','Geoparsing','Desarrollo Java','jpg'));
		echo (article('dungeon-realms','Dungeon Realms','Juego','jpg'));
		echo (article('chromatic-td','Chromatic TD','Juego','png'));
		echo (article('biwair','Biwair','Juego','jpg'));
		echo (article('mancala','Mancala','Juego','jpg'));
		echo (article('sinistra-defense','Sinistra Defense','Juego HTML5','png'));
		echo (article('tierra-media','Tierra Media','Mod para NWN','jpg'));
		echo (article('bitmaiden','Bit Maiden','Web / Wordpress','jpg'));
		echo (article('hecho-al-punto','Hecho al Punto','Web','png'));
		echo (article('estanco','Estanco de Llagostera','Web','jpg'));
		echo (article('taxi-san-roque','Taxi San Roque','Web','png'));		
		echo (article('roxbury','Roxbury: The Club','Web','jpg'));		
		?>
	</div>
</section>
<section id="trabajos">
	<h2>Otros trabajos</h2>
	<ul>
		<li>Detección de movimiento con Raspberry PI para cámaras de locales.</li>
		<li>Plugin Wordpress para crear landings personalizados para cada producto en venta.</li>
		<li>Aplicación web de gestión de vehículos de cortesía para taller de automoción.</li>
		<li>Implantaciones LOPD (Ley Ogánica de Protección de Datos).</li>		
		<li>Reparaciones gama blanca y gama marrón.</li>
		<li>Formador en ofimática.</li>
	</ul>
</section>
<?php include 'footer.php'; ?>