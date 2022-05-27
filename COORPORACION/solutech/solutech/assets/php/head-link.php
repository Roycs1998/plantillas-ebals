<?php 
$ubicacion_actual = basename($_SERVER['PHP_SELF']);
$inicio = "";
$contacto = "";
$nosotros = "";
$proyectos = "";
$servicios = "";

if ($ubicacion_actual == "inicio.php") {
  $inicio = "active";
  $titulo = "Corporación Ebals";
  $pagina = "Inicio";
}
if ($ubicacion_actual == "contacto.php") {
  $contacto = "active";
  $titulo = "Contacto - Corporación Ebals";
  $pagina = "Contacto";
}
if ($ubicacion_actual == "nosotros.php") {
  $nosotros = "active";
  $titulo = "Nosotros - EBALS";
  $pagina = "Nosotros";
}
if ($ubicacion_actual == "proyectos.php") {
  $proyectos = "active";
  $titulo = "Proyectos - EBALS";
  $pagina = "Proyectos";
}
if ($ubicacion_actual == "servicios.php") {
  $servicios = "active";
  $titulo = "Servicios - EBALS";
  $pagina = "Servicios";
  
}
?>
<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo $titulo;?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="assets/images/favicon.png">		
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/plugin_theme_css.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>        
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css"/>
        <script src="https://kit.fontawesome.com/ede263ef31.js" crossorigin="anonymous"></script>
		<!-- modernizr js -->	
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>		
    </head>