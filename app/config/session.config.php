<?php
// app/config/session.config.php
// Configuración de duración y control de sesión

session_start();

// Duración de la sesión en segundos (2 minutos)
$session_timeout = 120;

// Registrar el tiempo de última actividad
if (!isset($_SESSION['LAST_ACTIVITY'])) {
  $_SESSION['LAST_ACTIVITY'] = time();
}

// Verificar si la sesión ha expirado
if (time() - $_SESSION['LAST_ACTIVITY'] > $session_timeout) {
  session_unset();     // Limpiar variables de sesión
  session_destroy();   // Destruir la sesión
  header('Location: ../views/out.php'); // Redirigir al login
  exit();
}

// Actualizar el tiempo de última actividad
$_SESSION['LAST_ACTIVITY'] = time();
