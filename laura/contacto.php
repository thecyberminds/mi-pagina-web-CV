<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Contacto</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

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

<div class="title">
  <h2>Contacto</h2>
</div>

<?php
// Inicializa una variable para controlar si se ha enviaado el formulario
$mensajeEnviado = false;

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // procesar los datos del formulario
    // Por ejemplo, validar los datos y guardarlos en una base de datos o enviar un correo electrónico
    
    
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $mensajeEnviado = true;
}
?>
 <!--aqui empiezo hacer el formulario-->
<div class="formulario">
<?php if ($mensajeEnviado): ?>
    <div class="mensaje-exito">
        <p>Gracias <?php echo htmlspecialchars($nombre); ?>, hemos recibido tus datos.</p>
    </div>
  <?php else: ?>
  <form id="contactForm" action="contacto.php" method="post">
  <div class="logo">
    <img src="pictures/LOGO - CONTACTO.jpeg" alt="Descripción de la imagen" width="100">

  </div>
      <!-- Cajas de texto a rellenar -->
      <label for="nombre">Nombre:</label><br>
      <input type="text" id="nombre" name="nombre"><br>
      <label for="email">Email:</label><br>
      <input type="text" id="email" name="email"><br>

      <!-- Lista desplegable -->
      <label for="asunto">Asunto:</label><br>
      <select id="asunto" name="asunto">
          <option value="consulta">Consulta</option>
          <option value="Colaboraciones">Colaboraciones</option>
          <option value="oferta de empleo">Oferta de Empleo </option>
      </select><br>

      <!-- Área de texto -->
      <label for="mensaje">Mensaje:</label><br>
      <textarea id="mensaje" name="mensaje" rows="4" cols="50"></textarea><br>

      <!-- Casillas de verificación -->
      <label><input type="checkbox" name="interes" value="novedades"> Deseo recibir novedades</label><br>
      <label><input type="checkbox" name="interes" value="ofertas"> Deseo recibir ofertas especiales</label><br>
      <label><input type="checkbox" name="interes" value="eventos"> Deseo ser informado sobre eventos</label><br>

      <!-- Radiobuttons -->
      <label><input type="radio" name="contacto" value="email"> Email</label><br>
      <label><input type="radio" name="contacto" value="telefono"> Teléfono</label><br>
      <label><input type="radio" name="contacto" value="whatsapp"> WhatsApp</label><br>

      <!-- Botones submit y reset -->
      <input type="submit" value="Enviar">
      <input type="reset" value="Restablecer">
  </form>
  <?php endif; ?>
  
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


