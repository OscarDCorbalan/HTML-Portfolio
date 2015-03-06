<?php
/* genera Html para cada article (foto y titulo de proyecto) */
function article($link, $title, $subt, $image, $ext){
return <<<HTML
	<article>
	<a href="{$link}">
	<header>
	<div class="details">	
	<h1>{$title}</h1>
	<p>{$subt}</p>
	</div>
	</header>
	<span class="bw-wrap"><img src="img/{$image}-bw.{$ext}" class="bw"></span>
	<span class="clr-wrap"><img src="img/{$image}.{$ext}" class="clr"></span>
	</a>
	</article>
HTML;
}
include 'header.php'; ?>
	<div id="main">
		<div class="pagewidth">  
			<section id="portfolio">
				<?php
				echo (article('/','Geoparsing','Desarrollo Java','geoparsing','jpg'));
				echo (article('/','Dungeon Realms','Juego','dungeon-realms','jpg'));
				echo (article('/','Chromatic TD','Juego','chromatic','png'));
				echo (article('/','Biwair','Juego','biwair','jpg'));
				echo (article('/','Tierra Media','Mod para NWN','tierra-media','jpg'));
				echo (article('/','Bit Maiden','Web / Wordpress','bitmaiden','jpg'));
				echo (article('/','Hecho al Punto','Web','hecho-al-punto','png'));
				echo (article('/','Estanco de Llagostera','Web','estanco','jpg'));
				echo (article('/','Taxi San Roque','Web','taxi-san-roque','png'));
				echo (article('/','Radiotaxi Sotogrande','Web','radio-taxi-sotogrande','jpg'));
				echo (article('/','Oware','Juego','oware','jpg'));
				?>
			</section>
		</div>
<?php include 'footer.php'; ?>