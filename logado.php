<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="Index.css">
	<header>
		      <section id="logo">
				<img src="imagens/logo.jpg" alt="Vida OS">
			  </section>	
			 </header>
	</head>
<body>
	<?php
				include "includes/menu.php";
			  
			  
			
			session_start(); 
			if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) { 
				unset($_SESSION['usuario']); 
				unset($_SESSION['senha']); 
				session_destroy(); 
				header('location:logado.php'); 
			} 
			
			$logado = $_SESSION['usuario'];
		
			 echo "<h1>Logado como:".$logado."<h1>";
			 
			 ?>	
	</body>
</html>