<?php
$currentPage = 'hobby';
include 'header.php';
?>
<div id="hobbies">
	<section id="musica">
		<h2>Musica</h2>
		<p>He estudiado guitarra y música durante varios años. Si tienes un navegador moderno (soporta HTML5) puedes escuchar estas piezas tocadas por mi.</p>
		<p>La primera pieza es Bourrée en mi menor, de Bach (s.XVIII), una obra originalmente compuesta para laúd.</p>
		<audio controls> <!-- Si no soporta MP4, carga OGG y, si no, output del <p> -->
			<source src="/audio/Oscar_Bourree.m4a" type="audio/mp4">			
			<source src="/audio/Oscar_Bourree.oga" type="audio/ogg;">
			<p>Tu navegador no soporta el elemento 'audio' de HTML5.</p>
		</audio>
		<p>Esta segunda pieza es Czardas, de Monti (s.XIX), originalmente compuesta para violín y piano, aquí adaptada a guitarra eléctrica.</p>
		<audio controls>
			<source src="/audio/Oscar_Czardas.m4a" type="audio/mp4">			
			<source src="/audio/Oscar_Czardas.oga" type="audio/ogg;">
			<p>Tu navegador no soporta el elemento 'audio' de HTML5.</p>
		</audio>
		<p>Y por último algo aún más moderno... Una improvisación rockera.</p>
		<audio controls>
			<source src="/audio/Oscar_Improvis.m4a" type="audio/mp4">			
			<source src="/audio/Oscar_Improvis.oga" type="audio/ogg;">
			<p>Tu navegador no soporta el elemento 'audio' de HTML5.</p>
		</audio>
	</section>
	<section id="astro">
		<h2>Astro*</h2>
		<p>Me gustan las ciencias como la astrofísica y la astrobiología. He traducido artículos con el grupo AstroSeti, llegando a recibir dos Certificados de Reconocimiento, del Instituto de Astrobiología de la NASA y del Science@NASA.</p>
		<img src="/img/nasa/nai.jpg" alt="Nasa Astrobiology Institute">
		<img src="/img/nasa/science.jpg" alt="Nasa Astrobiology Institute">
	</section>
</div>
<?php include 'footer.php'; ?>