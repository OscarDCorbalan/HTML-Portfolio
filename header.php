<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="/style.css">
		<meta charset="utf-8"> 
		<title>Oscar Dominguez</title>
	</head>
	<body>
		<header>
			<div class="pagewidth">      
				<a href="/" class="htitle">
					<h1>Oscar Dominguez</h1>
					<h2>Desarrollador</h2>
				</a>			
				<nav>
					<a href="/" class="<?php if($currentPage == 'index'): ?>active<?php endif; ?>">Proyectos</a>
					<a href="http://github.com/OscarDoc" target="_blank">GitHub</a>
					<a href="/hobbies" class="<?php if($currentPage == 'hobby'): ?>active<?php endif; ?>">Hobbies</a>
					<a href="#contacto" id="contact">Contacto</a>
				</nav>      
			</div>
		</header>
		<div id="main">
			<div class="pagewidth"> 