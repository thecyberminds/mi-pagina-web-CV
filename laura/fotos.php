<!DOCTYPE html>
<html lang="es">
<head>
<?php
function buscarImagenesRecursivamente($directorio, $extensiones = ['jpg', 'jpeg', 'png', 'gif']) {
    $globPattern = $directorio . '/{*,.[!.]*,..?*}'; 
    $archivosYDirs = glob($globPattern, GLOB_BRACE | GLOB_MARK); // Marca los directorios con '/'
    
    foreach ($archivosYDirs as $item) {
        if (is_dir($item)) {
            // Si el item es un directorio, busca dentro de él recursivamente
            buscarImagenesRecursivamente($item, $extensiones);
        } else {
            // Si es un archivo, verifica si tiene una extensión permitida y lo imprime
            $extension = strtolower(pathinfo($item, PATHINFO_EXTENSION));
            if (in_array($extension, $extensiones)) {
                echo "<img src='$item' alt='Imagen' style='width:100%'>";
            }
        }
    }
}
?>
<meta charset="UTF-8">
<title>Fotos</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="title">
    <h2>Fotos</h2>
  </div>
<div class="menu">
    <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
        &#9776; <!-- Este es el icono de las tres rayas -->
    </a>
  <a href="index.html">Inicio</a>
  <div class="dropdown">
    <div class="dropbtn"><a href="proyectos.html">Proyectos</a></div>
    <div class="dropdown-content">
      <a href="SOSpacientes.html">SOS Pacientes</a>
      <a href="youth4change.html">Youth for Change</a>
      <a href="cyber.html">Mundo ciber</a>
    </div>
  </div>
  <div class="dropdown">
    <div class="dropbtn"><a href="mi_cv.html">Mi CV</a></div>
    <div class="dropdown-content">
      <a href="mi_cv.html">Curriculum Vitae</a>
      <a href="blog.html">Blog</a>
    </div>
  </div> 
  <a href="contacto.php">Contacto</a>
</div>

<div class="index-post">
  <h2>Todas las fotos</h2>
  <p>Todas las fotos </p>
</div>

<div class="carrusel" id="carrusel">
    <div class="carrusel-imagenes">
    <?php buscarImagenesRecursivamente('pictures'); ?>
    </div>
    <a class="prev" onclick="cambiarImagen(-1)">&#10094;</a>
    <a class="next" onclick="cambiarImagen(1)">&#10095;</a>
    <!--cambio de imágenes en carrusels de el inicio de la web-->
  </div>


<script src="script.js"></script>


</body>
<footer>
  <div id="cookieConsentContainer" class="cookie-consent-container">
    <div class="cookie-consent-content">
      <p>Utilizamos cookies para mejorar tu experiencia. Al continuar navegando aceptas su uso.</p>
      <button id="acceptCookieConsent">Aceptar</button>
    </div>
  </div>
  <p>Derechos de autor © 2024 LC. Todos los derechos reservados.</p>
</footer>
</html>