<?php
// Función para sanitizar datos de entrada
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Función para validar si un valor es un número positivo
function validatePositiveNumber($number) {
    return is_numeric($number) && $number > 0;
}

// Función para redirigir a una URL con un mensaje de éxito
function redirectWithMessage($url, $message) {
    session_start();
    $_SESSION['message'] = $message;
    header("Location: $url");
    exit();
}

// Función para mostrar mensajes de sesión
function showMessage() {
    session_start();
    if (isset($_SESSION['message'])) {
        echo "<p>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']);
    }
}
?>
