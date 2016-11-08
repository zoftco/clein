<?php
	session_start();
	if (isset($_SESSION['user_id'])){
		$_SESSION['time'] = time() + 3600;
		$login = true;
	} else {
		$login = false;
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="XXIV Congreso Latinoamericano de Estudiantes e Ingenieros Industriales y Afines">
	<title>XXIV Congreso Latinoamericano de Estudiantes e Ingenieros Industriales y Afines</title>
	<!--CSS-->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">

	<!--JS-->
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery-latest.pack.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/lightbox.min.js"></script>
	<script type="text/javascript" src="js/Login.js"></script>
	<script type="text/javascript" src="js/controlPagoTc.js"></script>
	<script type="text/javascript" src="js/loginControl.js"></script>




</head>
<body>
<?php include_once("analyticstracking.php") ?>
<header>
	<div class="container">
		<a href="index.php"><div class="logo">CLEIN 2017</div></a>
		<nav>
			<ul>
				<li><a href="#">Temática</a>
					<ul>
						<!-- <li><a href="tematica.php">Temática</a></li>
						<li><a href="expositores.php">Expositores</a></li>
						<li><a href="industriales.php">Visitas Industriales</a></li>
						<li><a href="concurso.php">Concurso de ponencia estudiantil</a></li> -->
					</ul>
				</li>
				<li><a href="#">Actividades</a>
					<ul>
						<!-- <li><a href="cronograma.php">Cronograma</a></li>
						<li><a href="actividades_nocturnas.php">Actividades Nocturnas</a></li>
						<li><a href="crea_tu_negocio.php">Crea tu negocio</a></li>
						<li><a href="actividad_social.php">Actividad social</a></li>
						<li><a href="visitas_tecnicas.php">Visitas Técnicas</a></li> -->
					</ul>
				</li>
				<li><a href="#">Comunidad</a>
					<ul>
						<!-- <li><a href="aleiiafpy.php">Aleiiaf Paraguay</a></li>
						<li><a href="aleiiaf.php">Aleiiaf</a></li>
						<li><a href="universidades.php">Universidades Patrocinadoras</a></li> -->
					</ul>
				</li>
				<li><a href="#">Ecuador</a>
					<ul>
						<!-- <li><a href="asuncion.php">Asunción</a></li>
						<li><a href="paraguay.php">El País</a></li>
						<li><a href="http://www.migraciones.gov.py/institucional" target="_blank">Datos Migraciones</a></li>
						<li><a href="tour_clein.php">Pre y Post Congreso</a></li> -->
					</ul>
				</li>
				<!-- <li><a href="hospedaje.php">Hospedaje</a></li>
				<li><a href="contacto.php">Contacto</a></li> -->
				<?php
					if ($login == false) {
				?>
				<li><a href="log_in.php">Entrar aqui</a></li>
				<?php
					} else {
				?>
				<li><a href="#">Mi Cuenta</a>
					<ul>
						<!-- <li><a href="inc/cerrarsesion.php">Cerrar sesión</a></li>
						<li><a href="mis_cursos.php">Mis cursos</a></li>
						<li><a href="cursos_disponibles.php">Cursos Disponibles</a></li> -->
					</ul>
				</li>
				<?php
					}
				?>

			</ul>
		</nav>
	</div>
</header>