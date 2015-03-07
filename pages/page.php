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
include '../header.php'; ?>
	<div id="main">
		<div class="pagewidth">  
			<section id="portfolio">
				<article>
					<a href="http://charlottetang.com/p/honda-motorcycle-mobile/">
						<header>
							<div class="details">	
								<h1>Geoparsing</h1>
								<p>Desarrollo Java</p>
							</div>
						</header>
						<span class="bw-wrap"><img src="img/geoparsing-bw.jpg" class="bw"></span>
						<span class="clr-wrap"><img src="img/geoparsing.jpg" class="clr"></span>
					</a>
				</article>
				<article>
					<a href="http://charlottetang.com/p/nasa-space-apps-challenge/">
						<header>
							<div class="details">	
								<h1>Dungeon Realms</h1>
								<p>Juego</p>
							</div>
						</header>
						<span class="bw-wrap"><img src="img/dungeon-realms-bw.jpg" class="bw"></span>
						<span class="clr-wrap"><img src="img/dungeon-realms.jpg" class="clr"></span>
					</a>
				</article>				
				<article>
					<a href="http://charlottetang.com/p/honda-motorcycle-mobile/">
						<header>
							<div class="details">	
								<h1>Chromatic TD</h1>
								<p>Juego</p>
							</div>
						</header>
						<span class="bw-wrap"><img src="img/chromatic-bw.png" class="bw"></span>
						<span class="clr-wrap"><img src="img/chromatic.png" class="clr"></span>
					</a>
				</article>
				<article>
					<a href="http://charlottetang.com/p/honda-motorcycle-mobile/">
						<header>
							<div class="details">	
								<h1>Biwair</h1>
								<p>Juego</p>
							</div>
						</header>
						<span class="bw-wrap"><img src="img/biwair-bw.jpg" class="bw"></span>
						<span class="clr-wrap"><img src="img/biwair.jpg" class="clr"></span>
					</a>
				</article>
				<article>
					<a href="http://charlottetang.com/p/honda-motorcycle-mobile/">
						<header>
							<div class="details">	
								<h1>Tierra Media</h1>
								<p>Mod para NWN</p>
							</div>
						</header>
						<span class="bw-wrap"><img src="img/tierra-media-bw.jpg" class="bw"></span>
						<span class="clr-wrap"><img src="img/tierra-media.jpg" class="clr"></span>
					</a>
				</article>
				<article>
					<a href="http://charlottetang.com/p/honda-motorcycle-mobile/">
						<header>
							<div class="details">	
								<h1>Bit Maiden</h1>
								<p>Web / Wordpress</p>
							</div>
						</header>
						<span class="bw-wrap"><img src="img/bitmaiden-bw.jpg" class="bw"></span>
						<span class="clr-wrap"><img src="img/bitmaiden.jpg" class="clr"></span>
					</a>
				</article>
				<article>
					<a href="http://charlottetang.com/p/honda-motorcycle-mobile/">
						<header>
							<div class="details">	
								<h1>Hecho al Punto</h1>
								<p>Web</p>
							</div>
						</header>
						<span class="bw-wrap"><img src="img/hecho-al-punto-bw.png" class="bw"></span>
						<span class="clr-wrap"><img src="img/hecho-al-punto.png" class="clr"></span>
					</a>
				</article>
				<article>
					<a href="http://charlottetang.com/p/honda-motorcycle-mobile/">
						<header>
							<div class="details">	
								<h1>Estanco de Llagostera</h1>
								<p>Web</p>
							</div>
						</header>
						<span class="bw-wrap"><img src="img/estanco-bw.jpg" class="bw"></span>
						<span class="clr-wrap"><img src="img/estanco.jpg" class="clr"></span>
					</a>
				</article>
				<article>
					<a href="http://charlottetang.com/p/honda-motorcycle-mobile/">
						<header>
							<div class="details">	
								<h1>Taxi San Roque</h1>
								<p>Web</p>
							</div>
						</header>
						<span class="bw-wrap"><img src="img/taxi-san-roque-bw.png" class="bw"></span>
						<span class="clr-wrap"><img src="img/taxi-san-roque.png" class="clr"></span>
					</a>
				</article>
				<article>
					<a href="http://charlottetang.com/p/honda-motorcycle-mobile/">
						<header>
							<div class="details">	
								<h1>Radiotaxi Sotogrande</h1>
								<p>Web</p>
							</div>
						</header>
						<span class="bw-wrap"><img src="img/radio-taxi-sotogrande-bw.jpg" class="bw"></span>
						<span class="clr-wrap"><img src="img/radio-taxi-sotogrande.jpg" class="clr"></span>
					</a>
				</article>
				
				<article>
					<a href="http://charlottetang.com/p/honda-motorcycle-mobile/">
						<header>
							<div class="details">	
								<h1>Oware</h1>
								<p>Juego</p>
							</div>
						</header>
						<span class="bw-wrap"><img src="img/oware-bw.jpg" class="bw"></span>
						<span class="clr-wrap"><img src="img/oware.jpg" class="clr"></span>
					</a>
				</article>
			</section>
		</div>
		<footer>
			
		</footer>
	</div>
</body>
</html>