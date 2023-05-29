<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Posicionamiento Pegajoso</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estilosF.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <meta id="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>
	<header>
		<nav class="navbar" data-aos="fade-in">
			<div class="contenedor">
				<b>
					<img loading="lazy" width="70" height="140" src="https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/01/Logotipo-LaMole.png?fit=600%2C1355&amp;ssl=1"/>
				</b>
				<b>
					<img decoding="async" width="200" height="153" src="https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/01/Logotipo-LaMole_25th.png?fit=96%2C96&amp;ssl=1" alt="" class="wp-image-5249" srcset="https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/01/Logotipo-LaMole_25th.png?w=600&amp;ssl=1 600w, https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/01/Logotipo-LaMole_25th.png?resize=300%2C237&amp;ssl=1 300w" sizes="(max-width: 600px) 100vw, 600px"/>
				</b>
				<b>
					<img decoding="async" width="160" height="150" src="https://lamole.com.mx/wp-content/uploads/2022/05/Logotopo-LaMoleHorrorEdition.png" alt="" class="wp-image-9047" width="120" height="100"/>
				</b>
				<b>
					<img decoding="async" width="160" height="150" src="https://lamole.com.mx/wp-content/uploads/2023/02/Logo-FCCC_2023_Transparente.png" alt="" class="wp-image-16566" width="120" height="100"/>
				</b>
			</div>

			<div class="contenedor" data-aos="fade-in">
				<a href="index.html">Inicio</a>
				<a href="aniversario.html">Aniversario</a>
				<a href="horror.html">Horror</a>
				<a href="cosplay.html">Cosplay</a>
				<a href="faqs.php">FAQS</a>
				<a href="https://lamole-2023.boletia.com/">Boletos</a>
			</div>
		</nav>
	</header>

	<main id="blog">
		<div class="contenedor">
			<aside>
				<h3 class="titulo">Diversos Eventos</h3>
				<nav class="indice">
					<a href="index.html">Inicio</a>
					<a href="aniversario.html">Aniversario</a>
					<a href="cosplay.html">Cosplay</a>
					<a href="horror.html">Horror</a>
					<a href="faqs.html">FAQS</a>
					<a href="https://lamole-2023.boletia.com/">Compra tus Boletos</a>
				</nav>
			</aside>
			<div class="contenido">
				<?php
				// Conexión a la base de datos
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "web";
				
				$conn = new mysqli($servername, $username, $password, $dbname);
				
				if ($conn->connect_error) {
					die("Error de conexión a la base de datos: " . $conn->connect_error);
				}
				
				// Consulta para obtener los posts desde la base de datos
				$sql = "SELECT * FROM preguntas";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
					// Generar los elementos <div class="post"> dinámicamente
					while ($row = $result->fetch_assoc()) {
						echo '<div class="post">';
						echo '<h1 class="titulo">' . $row["pregunta"] . '</h1>';
						echo '<p>' . $row["respuesta"] . '</p>';
						echo '</div>';
					}
				} else {
					echo "No se encontraron posts :( .";
				}
				
				$conn->close();
				?>
			</div>
		</div>
	</main>
	<footer>
		<div class = "findepagina" data-aos="fade-in">
			<h1 class ="titmov" href="#">LA MOLE &copy</h1>
			<div class="redesSociales">
				<a href="https://twitter.com/lamolemx"><i class="bi bi-twitter icono_redes"></i></a>
				<a href="https://github.com/AndresEdu" target="_blank"><i class="bi bi-github icono_redes"></i></a>
				<a href="https://www.instagram.com/andres_arciniega/" target="_blank"><i class="bi bi-instagram icono_redes"></i></a>
			</div>
		</div>
		
	</footer>
	
	
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    	AOS.init();
    </script>
	<script defer src="https://pyscript.net/alpha/pyscript.js"></script>
	
</body>
</html>